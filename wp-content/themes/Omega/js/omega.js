(function($){
    var getPortfolio = function (sector, location){
        var $parentSection = $('#filtered-portfolio');
        $.ajax({
            url: omega.ajaxurl,
            type: 'POST',
            data: {action: 'get_portfolio', sector: sector, location: location},
            success: function(response){
                $parentSection.html(response);
            }
        });
    };
    
    var getBusinessFilter = function (sector, location){
        var $parentSection = $('#our-business-filter');
        $.ajax({
            url: omega.ajaxurl,
            type: 'POST',
            data: {action: 'get_business_filter', sector: sector, location: location},
            success: function(response){
                $parentSection.html(response);
            }
        });
    };
    
    var getNews = function (years, hubs){
        var $parentSection = $('#filtered-news');
        $.ajax({
            url: omega.ajaxurl,
            type: 'POST',
            data: {action: 'get_news', years: years, hubs: hubs},
            success: function(response){
//                console.log(response);
                $parentSection.html(response);
            }
        });
    };
    
    $(function(){
        var sector = $('#sectors').val();
        var location = $('#locations').val();
        getPortfolio(sector, location);
        
        $('#sectors,#locations').change(function(event){
            event.preventDefault();
            var sector = $('#sectors').val();
            var location = $('#locations').val();
            getPortfolio(sector, location);
        });
        
        var years = $('#years').val();
        var hubs = $('#hubs').val();
        getNews(years, hubs);
        
        $('#years,#hubs').change(function(event){
            event.preventDefault();
            var years = $('#years').val();
            var hubs = $('#hubs').val();
            getNews(years, hubs);
        });
        
        var business_sector = $('#business-sectors').val();
        var business_location = $('#business-locations').val();
        getBusinessFilter(business_sector, business_location);
        
        $('#business-sectors,#business-locations').change(function(event){
            event.preventDefault();
            var business_sector = $('#business-sectors').val();
            var business_location = $('#business-locations').val();
            getBusinessFilter(business_sector, business_location);
        });
        
        $('.open-popup').magnificPopup({
            type:'inline',
            midClick: true,
            preloader: true
        });
    });
})(jQuery);


