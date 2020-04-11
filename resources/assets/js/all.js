var arrayItem = {};

function addToCart(event) {
    var id = $(event.target).attr("data-id");
    if (arrayItem[id]) {
        arrayItem[id].amount++;
    } else {
        arrayItem[id] = {
            'id': $(event.target).attr("data-id"),
            'name': $(event.target).attr("data-name"),
            'price': $(event.target).attr("data-price"),
            'amount': 1,
        };
    }

    localStorage.setItem('item', JSON.stringify(arrayItem));
    var json = JSON.parse(localStorage.getItem('item'))
    console.log(json);
    showCart();

}

function showCart() {
    $("#list-item-cart").empty();
    var cartTemplate = `
    <li>
        <div class="Order_number">
            <div class="Order_names">
                <span class="name">1x Mexican Pizza</span>
            </div>
            <div class="Order_price">
                <span class="price">$12</span>
            </div>
        </div>
    </li>
    `;

    $.each(arrayItem, (index, value) => {
        var price = value.amount * value.price;
        $cart = $(cartTemplate);
        $cart.find('.name').text(`${value.amount}x ${value.name}`);
        $cart.find('.price').text(`$${price}`);
        $("#list-item-cart").append($cart);
    })

    $('#order-total-price').text(`$${totalPrice()}`)
}

function totalPrice() {

    var totalPrice = 0;
    var totalAmount = 0;
    $.each(arrayItem, (index, value) => {
        var price = value.amount * value.price;
        totalPrice += price;
        totalAmount += value.amount;
    })

    $('#cart_count').text(`Cart : (${totalAmount}) $${totalPrice}`);

    return totalPrice;
}
