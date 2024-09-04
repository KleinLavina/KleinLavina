let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})
closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let products = [
    {
        id: 1,
        name: 'Wall Clock 12 Inch Silent ',
        image: '1.png',
        link: 'prod/a.html',
        shape:'round',
        price: 1995
    },
    {
        id: 2,
        name: 'Bernhard Products Black Wall Clock',
        image: '2.png',
        link: 'prod/b.html',
        shape:'round',
        price: 1250
    },
    {
        id: 3,
        name: 'Westclox Traditional Large Wall Clock',
        image: '3.png',
        link: 'prod/c.html',
        shape:'round',
        price: 1995
    },
    {
        id: 4,
        name: ' Fasmov 12 Vintage Bronze Round Wall Clock',
        image: '4.png',
        link: 'prod/d.html',
        shape:'round',
        price: 1340
    },
    {
        id: 5,
        name: 'Mosewa Wall Clock, Battery Operated Silent Non-Ticking ',
        image: '5.png',
        link: 'prod/e.html',
        shape:'round',
        price: 2000
    },
    {
        id: 6,
        name: 'CHYLIN Wall Clock Silent',
        image: '6.png',
        link: 'prod/f.html',
        shape:'round',
        price: 1889
    },
    {
        id: 7,
        name: 'Infinity Instruments Retro Wall Clock',
        image: '7.jpg',
        link: 'prod/g.html',
        shape:'square',
        price: 1889
    },
    {
        id: 8,
        name: 'Infinity Instruments Retro Wall Clock',
        image: '8.jpg',
        link: 'prod/h.html',
        shape:'square',
        price: 1889
    },
    {
        id: 9,
        name: 'Seiko CLOCK (Model: QXA469BLH) , Brown',
        image: '9.jpg',
        link: 'prod/i.html',
        shape:'square',
        price: 1889
    },
    {
        id: 10,
        name: 'FULL HOUSE Wall Clock Silent Non Ticking Battery Operated',
        image: '10.jpg',
        link: 'prod/j.html',
        shape:'square',
        price: 1889
    },
    {
        id: 11,
        name: 'Rizalit Wood Wall Clock Artistic Modern Classic',
        image: '11.jpg',
        link: 'prod/k.html',
        shape:'irregular',
        price: 1889
    },
    {
        id: 12,
        name: 'Large Wall Clock Battery Operated DIY Wall Clock',
        image: '12.jpg',
        link: 'prod/l.html',
        shape:'irregular',
        price: 1889
    },
    {
        id: 13,
        name: 'Modern Melting Shelf Clock',
        image: '13.jpg',
        link: 'prod/m.html',
        shape:'irregular',
        price: 1889
    },
    {
        id: 14,
        name: 'Crystal Metal Wall Clock Silent Non Ticking',
        image: '14.jpg',
        link: 'prod/n.html',
        shape:'irregular',
        price: 1889
    },
    {
        id: 15,
        name: 'SEIKO Melodies in Motion Wall Clock, Nighttime City Skyline',
        image: '15.png',
        link: 'prod/o.html',
        shape:'oval',
        price: 1889
    },
    {
        id: 16,
        name: 'Menterry Oval Retro Wall Clock',
        image: '16.png',
        link: 'prod/p.html',
        shape:'oval',
        price: 1889
    },
    {
        id: 17,
        name: 'FirsTime & Co.® Kensington Wall Clock, Brown',
        image: '17.jpg',
        link: 'prod/q.html',
        shape:'oval',
        price: 1889
    },
    {
        id: 18,
        name: 'Seiko Melodies in Motion Wall Clock, Glittering Starry Night',
        image: '18.png',
        link: 'prod/r.html',
        shape:'oval',
        price: 1889
    }
    
];
let listCards  = [];
function initApp(){
    products.forEach((value, key) =>{
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <div id="${value.shape}">
            <img src="images/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">P${value.price.toLocaleString()}</div>
            <a style="text-decoration:none;color:greenyellow;" href="${value.link}"><br> View Details>></br></a>
            <button onclick="addToCard(${key})">+ CART</button>
            </div>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key){
    if(listCards[key] == null){
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard(){
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key)=>{
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if(value != null){
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="images/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
                listCard.appendChild(newDiv);
        }
    })
    total.innerText = totalPrice.toLocaleString();
    quantity.innerText = count;
}
function changeQuantity(key, quantity){
    if(quantity == 0){
        delete listCards[key];
    }else{
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}
