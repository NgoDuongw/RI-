//GIỎ HÀNG
let cartCount = 0;  

function addToCart() {
    cartCount++; 
    updateCart(); 
}

function updateCart() {
    const cartSpan = document.getElementById('cart');
    cartSpan.textContent = cartCount; 
}

//ĐIỀU HƯỚNG INDEX
var hinh = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/slider/1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/slider/2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/slider/3.png",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/slider/4.jpg",
]
var index = 0;

function next() {
    index++;
    if (index >= hinh.length) index = 0;
    document.getElementById('show').src = hinh[index];
}

function back() {
    index--;
    if (index < 0) index = hinh.length - 1;
    document.getElementById('show').src = hinh[index];
}

//CART
document.addEventListener('DOMContentLoaded', function () {
    const addToCartButtons = document.querySelectorAll('.btn-outline-secondary');

    addToCartButtons.forEach(function (button) {
        button.addEventListener("click", function (event) {
            let product = button.closest('.card-body');
            let productName = product.querySelector('h5').innerText;
            let productPrice = product.querySelector('.price b').innerText;
            let productImage = product.parentElement.querySelector('img').src;
            add_to_cart(productImage, productName, productPrice);
        });
    });

    function add_to_cart(productImage, productName, productPrice) {
        let cartTable = document.querySelector('tbody');
        let cartItems = cartTable.querySelectorAll('.td-image');

        for (let i = 0; i < cartItems.length; i++) {
            let productNameInCart = cartItems[i].querySelector('h6').innerText;
            if (productNameInCart === productName) {
                alert("Sản phẩm đã có trong giỏ hàng");
                return;
            }
        }

        let newRow = document.createElement("tr");
        newRow.innerHTML = `
            <td class="td-image"><img src="${productImage}" width="100" alt=""><h6>${productName}</h6></td>
            <td class="pricee"><span>${productPrice}<sup></sup></span></td>
            <td><input type="number" value="1" min="0" name="" id=""></td>
            <td><h6 onclick="close_parent(event)"><i class="fas fa-trash-alt"></i></h6></td>
        `;
        cartTable.appendChild(newRow);
    }
});


//DELETE
function close_parent(event) {
    var row = event.target.closest('tr'); 
    row.style.display = 'none';
}


//SAO
const stars = document.querySelectorAll('.fa-star');

    stars.forEach((star, index) => star.addEventListener('click', () => {
        stars.forEach((s, i) => s.classList[i <= index ? 'add' : 'remove']('checked'));
    }));

//ĐIỀU HƯỚNG IP 15 PROMAX
var XANH = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-blue-1-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-blue-2-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-blue-3-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-blue-4-1.jpg",
]
var index = 0;

function nextt() {
    index++;
    if (index >= XANH.length) index = 0;
    document.getElementById('xanh').src = XANH[index];
}

function backk() {
    index--;
    if (index < 0) index = XANH.length - 1;
    document.getElementById('xanh').src = XANH[index];
}

var DEN = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-black-1-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-black-2-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-black-3-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-black-4.jpg",
]

var Den = 0;

function nexttt() {
    Den++;
    if (Den >= DEN.length) Den = 0;
    document.getElementById('den').src = DEN[Den];
}

function backkk() {
    Den--;
    if (Den < 0) Den = DEN.length - 1;
    document.getElementById('den').src = DEN[Den];
}

var TU_NHIEN = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-tu-nhien-1-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-tu-nhien-2-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-tu-nhien-3-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_pro_max/iphone-15-pro-max-tu-nhien-4-1.jpg",
]

var Tu_nhien = 0;

function nextttt() {
    Tu_nhien++;
    if (Tu_nhien >= TU_NHIEN.length) Tu_nhien = 0;
    document.getElementById('tu_nhien').src = TU_NHIEN[Tu_nhien];
}

function backkkk() {
    Tu_nhien--;
    if (Tu_nhien < 0) Tu_nhien = TU_NHIEN.length - 1;
    document.getElementById('tu_nhien').src = TU_NHIEN[Tu_nhien];
}


//ĐIỀU HƯỚNG IP 15 PLUS
var XANHLANHAT = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-1-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-128gb-xanh-la-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-128gb-xanh-la-3.jpg",
]
var Xanh_la_nhat = 0;

function Nextt() {
    Xanh_la_nhat++;
    if (Xanh_la_nhat >= XANHLANHAT.length) Xanh_la_nhat = 0;
    document.getElementById('xanhlanhat').src = XANHLANHAT[Xanh_la_nhat];
}

function Backk() {
    Xanh_la_nhat--;
    if (Xanh_la_nhat < 0) Xanh_la_nhat = XANHLANHAT.length - 1;
    document.getElementById('xanhlanhat').src = XANHLANHAT[Xanh_la_nhat];
}

var plus = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-1-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-128gb-xanh-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-512gb-xanh-3.jpg",
]

var zzz = 0;

function A() {
    zzz++;
    if (zzz >= plus.length) zzz = 0;
    document.getElementById('aa').src = plus[zzz];
}

function B() {
    zzz--;
    if (zzz < 0) zzz = plus.length - 1;
    document.getElementById('aa').src = plus[zzz];
}

var HONG_NHAT = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-1-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-128gb-hong-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/iphone_15_plus/iphone-15-plus-128gb-hong-3.jpg",
]

var Hong_nhat = 0;

function C() {
    Hong_nhat++;
    if (Hong_nhat >= HONG_NHAT.length) Hong_nhat = 0;
    document.getElementById('hongnhat').src = HONG_NHAT[Hong_nhat];
}

function D() {
    Hong_nhat--;
    if (Hong_nhat < 0) Hong_nhat = HONG_NHAT.length - 1;
    document.getElementById('hongnhat').src = HONG_NHAT[Hong_nhat];
}


//ĐIỀU HƯỚNG SAMSUNG
var samsung1 = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-12.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-13.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-14.jpg",
]
var samSUNG = 0;

function SUNG() {
    samSUNG++;
    if (samSUNG >= samsung1.length) samSUNG = 0;
    document.getElementById('ss').src = samsung1[samSUNG];
}

function SAM() {
    samSUNG--;
    if (samSUNG < 0) samSUNG = samsung1.length - 1;
    document.getElementById('ss').src = samsung1[samSUNG];
}

var abc = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-xam-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-12.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-13.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-tim-14.jpg",
]
var thua = 0;

function VV() {
    thua++;
    if (thua >= abc.length) thua = 0;
    document.getElementById('gg').src = abc[thua];
}

function YT() {
    thua--;
    if (thua < 0) thua = abc.length - 1;
    document.getElementById('gg').src = abc[thua];
}

var xyz = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-12.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-13.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/samsung/samsung-galaxy-s24-ultra-vang-14.jpg",
]
var thang = 0;

function PP() {
    thang++;
    if (thang >= xyz.length) thang = 0;
    document.getElementById('vang').src = xyz[thang];
}

function RR() {
    thang--;
    if (thang < 0) thang = xyz.length - 1;
    document.getElementById('vang').src = xyz[thang];
}



//ĐIỀU HƯỚNG XIAOMI
var xiaomi1 = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-xanh-12.jpg",
]
var xiaoMi = 0;

function move() {
    xiaoMi++;
    if (xiaoMi >= xiaomi1.length) xiaoMi = 0;
    document.getElementById('balam').src = xiaomi1[xiaoMi];
}

function returnn() {
    xiaoMi--;
    if (xiaoMi < 0) xiaoMi = xiaomi1.length - 1;
    document.getElementById('balam').src = xiaomi1[xiaoMi];
}

var hd = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-12.jpg",
]
var iu = 0;

function KK() {
    iu++;
    if (iu >= hd.length) iu = 0;
    document.getElementById('klj').src = hd[iu];
}

function UU() {
    iu--;
    if (iu < 0) iu = hd.length - 1;
    document.getElementById('klj').src = hd[iu];
}

var hd = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-den-12.jpg",
]
var iu = 0;

function KK() {
    iu++;
    if (iu >= hd.length) iu = 0;
    document.getElementById('klj').src = hd[iu];
}

function UU() {
    iu--;
    if (iu < 0) iu = hd.length - 1;
    document.getElementById('klj').src = hd[iu];
}

var haie = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/xiaomi/xiaomi-14-trang-12.jpg",
]
var thuong = 0;

function come() {
    thuong++;
    if (thuong >= haie.length) thuong = 0;
    document.getElementById('trang').src = haie[thuong];
}

function on() {
    thuong--;
    if (thuong < 0) thuong = haie.length - 1;
    document.getElementById('trang').src = haie[thuong];
}


//ĐIỀU HƯỚNG REDMI
var redmi1 = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-12.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note-13-pro-xanh-13.jpg",
]
var dm = 0;

function go() {
    dm++;
    if (dm >= redmi1.length) dm = 0;
    document.getElementById('red').src = redmi1[dm];
}

function cs() {
    dm--;
    if (dm < 0) dm = redmi1.length - 1;
    document.getElementById('red').src = redmi1[dm];
}

var lane = [
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-1.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-2.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-3.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-4.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-5.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-6.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-7.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-8.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-9.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-10.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-11.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-12.jpg",
    "/JAVASCRIPT/Assimentt/index/project/assets/img/redmi/xiaomi-redmi-note13-pro-tim-13.jpg",
]
var pn = 0;

function minh() {
    pn++;
    if (pn >= lane.length) pn = 0;
    document.getElementById('mi').src = lane[pn];
}

function lien() {
    pn--;
    if (pn < 0) pn = lane.length - 1;
    document.getElementById('mi').src = lane[pn];
}


//ẢNH PRODUCT TRONG INDEX
let promax = document.getElementById('iphone_15_pro_max');
        promax.addEventListener('mouseover',function(){
            promax.src = "assets/img/product/iphone-15-pro-5-PURPLE.jpg"
        });

        promax.addEventListener('mouseout',function(){
            promax.src = "assets/img/product/iphone-15-pro-max-blue-2-1.jpg"
        });

let pro = document.getElementById('iphone_15_pro');
        pro.addEventListener('mouseover',function(){
            pro.src = "assets/img/product/iphone-15-pro-13-BLACK.jpg"
        });

        pro.addEventListener('mouseout',function(){
            pro.src = "assets/img/product/apple-iphone-15-pro-1-1.jpg"
        });

let pluss = document.getElementById('iphone_15_plus');
        pluss.addEventListener('mouseover',function(){
            pluss.src = "assets/img/product/iphone-15-7-GREENjpg.jpg"
        });

        pluss.addEventListener('mouseout',function(){
            pluss.src = "assets/img/product/iphone-15-plus-128gb-hong-2.jpg"
        });

let normal = document.getElementById('iphone_15');
        normal.addEventListener('mouseover',function(){
            normal.src = "assets/img/product/iphone-15-13-YELLOW.jpg"
        });

        normal.addEventListener('mouseout',function(){
            normal.src = "assets/img/product/iphone-15-128gb-xanh-la-2.jpg"
        });

let ssung = document.getElementById('samsungGalaxy');
        ssung.addEventListener('mouseover',function(){
            ssung.src = "assets/img/product/a.jpg"
        });

        ssung.addEventListener('mouseout',function(){
            ssung.src = "assets/img/product/samsung-galaxy-s24-xam-2.jpg"
        });

let redmii = document.getElementById('redmi');
        redmii.addEventListener('mouseover',function(){
            redmii.src = "assets/img/product/xiaomi_redmi_note_13_pro_512gb_verde_3.webp"
        });

        redmii.addEventListener('mouseout',function(){
            redmii.src = "assets/img/product/xiaomi-redmi-note-13-pro-tim-5.jpg"
        });

let xiaomi = document.getElementById('xiaomi');
        xiaomi.addEventListener('mouseover',function(){
            xiaomi.src = "assets/img/product/xiaomi-14-5g-dual-sim-white-512gb-and-12gb-ram.jpg"
        });

        xiaomi.addEventListener('mouseout',function(){
            xiaomi.src = "assets/img/product/xiaomi-14-xanh-10.jpg"
        });