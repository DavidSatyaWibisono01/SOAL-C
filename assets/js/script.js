document.addEventListener('DOMContentLoaded', function() {
    var menuList = document.getElementById('menu-list');

    var menuOptions = ['Nasi Goreng', 'Mie Ayam', 'Soto Ayam', 'Bakso', 'Ayam Goreng'];

    menuOptions.forEach(function(menu) {
        var li = document.createElement('li');
        li.textContent = menu;
        menuList.appendChild(li);

        var option = document.createElement('option');
        option.value = menu;
        option.textContent = menu;
        document.getElementById('menu').appendChild(option);
    });

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var orderData = document.getElementById('order-data');
            orderData.textContent = this.responseText;
        }
    };
    xhttp.open('GET', 'order_data.txt', true);
    xhttp.send();
});
