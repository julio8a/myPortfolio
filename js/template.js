$(function() {

  $.getJSON('js/data.json', function(data) {
    var servicesTemplate = $('#servicesTemplate').html();
    var servicesResults = Mustache.to_html(servicesTemplate, data);
    $('#services ul').append(servicesResults);

    var experienceTemplate = $('#experienceTemplate').html();
    var experienceResults = Mustache.to_html(experienceTemplate, data);
    $('#experience').append(experienceResults);

    var blockTemplate = $('#blockTemplate').html();
    var blockResults = Mustache.to_html(blockTemplate, data);
    $('#blocks-container').append(blockResults);

    var iconTemplate = $('#iconTemplate').html();
    var iconResults = Mustache.to_html(iconTemplate, data);
    $('#project-menu .center').append(iconResults);

    var aboutTemplate = $('#aboutTemplate').html();
    var aboutResults = Mustache.to_html(aboutTemplate, data);
    $('#aboutMe').append(aboutResults);

    var navigationTemplate = $('#navigationTemplate').html();
    var navigationResults = Mustache.to_html(navigationTemplate, data);
    $('nav .wrapper ul').append(navigationResults);

    var socialTemplate = $('#socialTemplate').html();
    var socialResults = Mustache.to_html(socialTemplate, data);
    $('footer .center').append(socialResults);

  }); //getJSON
  
}); //function
