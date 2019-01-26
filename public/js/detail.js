$(document).ready(function(){
    var bookDetail = $('#amazon-origin-data').find('#dp-container');
    name = bookDetail.find('#productTitle').text();
    img = bookDetail.find('#imgBlkFront').attr('src');
    description = bookDetail.find('#bookDescription_feature_div').find('noscript').html();
    $('.hn-description').html(description);
    $('.hn-product-name').text(name);
    $('.hn-img').attr('src', img);
    $('.hn-price').show();
});