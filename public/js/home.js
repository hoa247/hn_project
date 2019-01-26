$(document).ready(function(){
    var bookContent = $('#amazon-origin-data').find('#merchandised-content');
    var bookCategories = bookContent.find('.acswidget')

    var categoriesArr=[];
    bookCategories.each(function(index){
        var category = {};
        category.title = $(this).find('.acswidget-carousel__title').text();

        var products = $(this).find('li');
        var productsArr=[];

        products.each(function(index){
            var product = {};
            product.img = $(this).find('img').attr('src');
            product.link = 'https://www.amazon.com' + $(this).find('a').attr('href');
            product.name = $(this).find('.acs_product-title').find('.a-size-base').text();
            product.price = $(this).find('.acs_product-price__buying:first').text();

            var productArr=[];
            productsArr.push(product); 
        });

        category.products = productsArr;
        categoriesArr.push(category); 
    });

    for (var i = 0; i < categoriesArr.length; i++) {
        var category = categoriesArr[i];
        var tmp = $('#clone-category').clone();
        $(tmp).find('.title-text').text(category.title);
        $(tmp).find('.hn-products').attr('id', 'hn-products'+i);
        $('.hn-categories').append(tmp);
        var products = category.products;
        for (var j = 0; j < products.length; j++) {
            product = products[j];
            if (product.img != "https://images-na.ssl-images-amazon.com/images/G/01/acs/ux/transparent.png" && product.price) {
                price = product.price;
                newPrice = parseFloat(price.replace('$',''));
                newPrice = parseFloat(newPrice * 1.1).toFixed(2) + ' $'
                productTmp = $('#clone-product').clone();
                $(productTmp).find('.product-name').text(product.name);
                $(productTmp).find('.price').text(newPrice);
                $(productTmp).find('.product-img').attr('src', product.img);
                $(productTmp).find('.zoom').attr('href', product.img);
                $(productTmp).find('.add-cart').attr('href', "detail?price="+ newPrice +"&link=" + product.link);
                $('#hn-products'+i).append(productTmp);
                $(productTmp).show();
            }
        }
        $(tmp).show();
    }
});