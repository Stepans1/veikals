function $(param) {
    
}

$(function ()
{
    $('.add-to-cart').on('click',function (e){
        e.preventDefault();
        let id = $(this).data('id');
        console.log(id);
    });
});