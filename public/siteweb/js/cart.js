let cart = [];

// عند الضغط على زر اضافة لفتح البوب للمنتج
$('.add-to-cart-btn').on('click', function() {
    let productId = $(this).data('product-id');
    // هنا يفضل استخدام نفس المودل لكن مع تغير المحتوى باستخدام ajax
    // $(`#popup-${productId}`).show();
    updatePopupPrice(productId); // تحديث السعر
});

function changeSize(product_id) {
    updatePopupPrice(product_id); // تحديث السعر
}

$('.add-to-cart-btn').click(function() {
    let product_id = $(this).data('product-id');
    $.ajax({
        url : "/dashboard/products/" + product_id,
        type: "GET",
        success: function(response) {
            $('#name-product-modal').text(response.name);
            $('#content-product-modal').text(response.content);
            $('#image-product-modal').attr('src', response.image_url);
            $('.popup-price').attr('data-productid', response.id);
            $('#add_product_cart_btn').attr('data-productid', response.id);
            $('.calc-quantity').attr('data-productid', response.id);
            $('.quantity_value_text').attr('id', "quantity-" + response.id);
            $('#quantity-' + response.id).text(1);

            $('#productId').text(response.id);

            let sizes = response.meals;
            $('#sizes-product-modal').empty();
            sizes.forEach((item, index) => {
                $('#sizes-product-modal').append(`
                    <label class="relative flex items-center justify-around cursor-pointer" data-index="${index}">
                        <span class="ml-2 text-black w-2/4">${item.name}</span>
                        <span class="ml-2 text-red-500 w-1/4" align="center">${item.price} ₪</span>
                        <input class="sr-only peer" name="size-${item.product_id}" value="${item.name}" data-price="${item.price}"
                            type="radio"" ${index === 0 ? 'checked' : ''} onclick="changeSize(${item.product_id})" />
                        <div class="h-6 text-gray-300 peer-checked:text-amber-400  peer-checked:shadow-amber-500/50 transition duration-300 ease-in-out w-1/4"
                            align="left">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                    </label>
                `);
                if(index === 0) {
                    changeSize(item.product_id);
                }
            });
            $('#addToCartModal').modal('show');
        },
        error: function(xhr) {
            console.error(xhr.responseText);
        }
    });
    updatePopupPrice(product_id); // تحديث السعر
});

$('.calc-quantity').on('click', function() {
    let productId = parseInt($('#productId').text());
    let quantity = parseInt($(`#quantity-${productId}`).text());
    let calc_type = $(this).data('type');


    if (calc_type === 'plus') {
        quantity += 1;
        $(`#quantity-${productId}`).text(quantity);
    }

    if (calc_type === 'minus') {
        if (quantity > 1) {
            quantity -= 1;
            $(`#quantity-${productId}`).text(quantity);
        }
    }

    updatePopupPrice(productId); // تحديث السعر
});

// تأكيد الإضافة إلى السلة
$('#add_product_cart_btn').on('click', function() {
    let productId = parseInt($('#productId').text());
    let name = $(`#name-product-modal`).text();
    let size = $(`input[name=size-${productId}]:checked`).val(); // الحصول على الحجم المختار
    let quantity = parseInt($(`#quantity-${productId}`).text());   // الحصول على الكمية المختارة
    let price = parseFloat($(`input[name=size-${productId}]:checked`).data('price')); // الحصول على السعر
    let img = $('#image-product-modal').attr('src');

    $('#cartAlart').slideDown();

    // إضافة العنصر إلى السلة
    addToCart(productId, name, size, quantity, price,img);

    $(`#popup-${productId}`).hide();
    $(`#addToCartModal`).hide();
    updateCartDisplay();
});

// تحديث السعر في الـ popup
function updatePopupPrice(productId) {
    let selectedPrice = parseFloat($(`input[name=size-${productId}]:checked`).data('price'));
    let quantity = parseInt($(`#quantity-${productId}`).text());
    let total = selectedPrice * quantity;
    $(`.popup-price[data-productid=${productId}]`).text(total);
}

// إضافة عنصر إلى السلة
function addToCart(productId, name, size, quantity, price,img) {
    const existingItemIndex = cart.findIndex(item => item.productId === productId && item.size === size);

    // التحصص من الوجود فقط فنرفع القيم
    if (existingItemIndex > -1) {
        cart[existingItemIndex].quantity += quantity;
    } else {
        cart.push({
            productId : productId,
            name : name,
            size : size,
            quantity : quantity,
            price : price,
            img : img
        });
    }
}

// تحديث عرض السلة
function updateCartDisplay() {
    if (cart.length === 0) {
        $('.emptyCart').show();
        $('.fullCart').hide();
        $('#cartAlart').slideUp();


    } else {
        $('.emptyCart').hide();
        $('.fullCart').show();
        $('.cart-items').empty().show();

        let total = 0;
        let totalQuantity = 0;

        cart.forEach((item, index) => {
            const itemTotal = item.price * item.quantity;
            total += itemTotal;
            totalQuantity += item.quantity;

            $('.cart-items').append(`
                <div class="cart-item flex items-end justify-between my-2 p-2 border-2 border-neutral-300 shadow-4 rounded-lg" data-index="${index}">
                    <div class="flex item-center justify-start">
                        <img src="${item.img}" width="55px" id="cart-image-${item.productId}" alt="cart-01" class="rounded-lg	">
                        <div class="flex flex-col justify-between items-start ms-3">
                            <h4 class="text-base font-bold text-black">${item.name} - <span>${item.size}</span></h4>
                            <span class="text-red-500 font-bold">${itemTotal}$</span>
                            <div class="flex flex-row items-center justify-between">
                                <button class="bg-amber-400 hover:bg-amber-700 text-black font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200 calc-quantity-cart" data-type="plus" data-product-id="${item.productId}"  data-index="${index}">
                                    <i class="fa-solid fa-plus"></i>
                                </button>
                                <span class="text-black font-bold text-base mx-2" id="quantity-cart-${index}">${item.quantity}</span>
                                <button class="bg-amber-400 hover:bg-amber-700 text-black font-bold w-5 h-5 p-4 rounded-full flex items-center justify-center transition ease-in duration-200 calc-quantity-cart" data-type="minus" data-product-id="${item.productId}"  data-index="${index}">
                                    <i class="fa-solid fa-minus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-end h-full m-2">
                        <button class="text-neutral-500 hover:text-red-700 remove-item">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </div>
                </div>
            `);
            $.ajax({
                url: '/cart',
                method: 'POST',
                data: {
                    productId: item.productId,
                    quantity: item.quantity,
                    size: item.size,
                    _token: csrf_token
                },
                success: function(response) {
                    // الحصول على الرد
                },
                error: function(xhr, status, error) {
                    // الحصول على الخطأ
                }
            });
        });


        $('.total-price').text(total);
        $('.total-quantity').text(totalQuantity);
    }
}


$(document).on('click', '.calc-quantity-cart', function() {
    let index = $(this).data('index');
    let productId = $(this).data('product-id');
    let quantity = parseInt($(`#quantity-cart-${index}`).text());
    let calc_type = $(this).data('type');


    if (calc_type === 'plus') {
        quantity += 1;
        $(`#quantity-cart-${index}`).text(quantity);
    }
    if (calc_type === 'minus') {
        if (quantity > 1) {
            quantity -= 1;
            $(`#quantity-cart-${index}`).text(quantity);
        }
    }

    cart[index].quantity = quantity;

    updateCartDisplay();
});

// حدث حذف عنصر
$(document).on('click', '.remove-item', function() {
    const index = $(this).closest('.cart-item').data('index');
    cart.splice(index, 1);
    updateCartDisplay();
});


// الطلبات الداخلية
$("#confirmNumberOfTable").on('click', function() {
    let numberOfTable = $('#numberOfTableInput').val();
    $("#numberOfTableForInside").text(numberOfTable);
    updateCartInsideDisplay();
})

function updateCartInsideDisplay() {
    $('#cartInsideItems').empty().show();

    cart.forEach((item, index) => {
        const itemTotal = item.price * item.quantity;
        $('#cartInsideItems').append(`
            <div class="w-full flex items-center justify-center mt-3 p-3 shadow-md text-black rounded-full">
                ${item.quantity}  ${item.name} - ${item.size} -
            </div>
        `);
    });
}

$('#doneOursideOrder').on('click', function() {
    let address = $('.address-order-input').val();
    $('.address-order').text(address);
})
function orderOutSide(){
    // .address-order

}

