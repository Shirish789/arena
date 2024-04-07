




                // -------------------------------------------------------------------------
                brand_s_form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    add_brand();
                })

                function add_brand() {

                    let data = new FormData();
                    data.append('name', brand_name_inp.value);
                    data.append('add_brand', '');
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);

                    xhr.onload = function () {
                        var myModal = document.getElementById('brand-s');
                        var modal = bootstrap.Modal.getInstance(myModal);
                        modal.hide();
                        console.log(this.responseText);
                        if (this.responseText == '1') {
                            alert('success', 'Brand Added');
                            get_brand();
                        }
                        else {
                            alert('error', "Server down");
                        }
                    };
                    xhr.send(data);

                }

                function get_brand() {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        document.getElementById('brand_data').innerHTML = this.responseText;
                        let sm = document.getElementById('brand_name_inp');
                        sm.value = '';
                    }
                    xhr.send('get_brand');
                }


                function rem_brand(val) {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        // console.log(this.responseText)
                        if (this.responseText == 1) {
                            alert('success', 'Brand removed');
                            get_brand();
                        }else if(this.responseText=='card added'){
                            alert("error","Brand is added in card")
                        } 
                        else {
                            alert('error', 'server down');
                        }
                    }
                    xhr.send('rem_brand=' + val);
                }

                // --------------------------------------------------------------------------------------
                size_s_form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    add_size();
                })

                function add_size() {

                    let data = new FormData();
                    data.append('name', size_name_inp.value);
                    data.append('add_size', '');
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);

                    xhr.onload = function () {
                        var myModal = document.getElementById('size-s');
                        var modal = bootstrap.Modal.getInstance(myModal);
                        modal.hide();
                        console.log(this.responseText);
                        if (this.responseText == '1') {
                            alert('success', 'Size Added');
                            get_size();
                        }
                        else {
                            alert('error', "Server down");
                        }
                    };
                    xhr.send(data);

                }

                function get_size() {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        document.getElementById('size_data').innerHTML = this.responseText;
                        let sm = document.getElementById('size_name_inp');
                        sm.value = '';
                    }
                    xhr.send('get_size');
                }


                function rem_size(val) {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        if (this.responseText == 1) {
                            alert('success', 'Size removed');
                            get_size();
                        }else if(this.responseText=='Size added'){
                            alert("error","size is added in card")
                        } 
                        else {
                            alert('error', 'server down');
                        }
                    }
                    xhr.send('rem_size=' + val);
                }
                // --------------------------------------------------------------------------------------
                price_s_form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    add_price();
                })

                function add_price() {

                    let data = new FormData();
                    data.append('price', price_name_inp.value);
                    data.append('add_price', '');
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);

                    xhr.onload = function () {
                        var myModal = document.getElementById('price-s');
                        var modal = bootstrap.Modal.getInstance(myModal);
                        modal.hide();
                        console.log(this.responseText);
                        if (this.responseText == '1') {
                            alert('success', 'Price Added');
                            get_price();
                        }
                        else {
                            alert('error', "Server down");
                        }
                    };
                    xhr.send(data);

                }

                function get_price() {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        document.getElementById('price_data').innerHTML = this.responseText;
                        let sm = document.getElementById('price_name_inp');
                        sm.value = '';
                    }
                    xhr.send('get_price');
                }


                function rem_price(val) {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        if (this.responseText == 1) {
                            alert('success', 'price removed');
                            get_price();
                        } else {
                            alert('error', 'server down');
                        }
                    }
                    xhr.send('rem_price=' + val);
                }
                // --------------------------------------------------------------------------------------
                material_s_form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    add_material();
                })

                function add_material() {

                    let data = new FormData();
                    data.append('material', material_name_inp.value);
                    data.append('add_material', '');
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);

                    xhr.onload = function () {
                        var myModal = document.getElementById('material-s');
                        var modal = bootstrap.Modal.getInstance(myModal);
                        modal.hide();
                        console.log(this.responseText);
                        if (this.responseText == '1') {
                            alert('success', 'Material Added');
                            get_material();
                        }
                        else {
                            alert('error', "Server down");
                        }
                    };
                    xhr.send(data);

                }

                function get_material() {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        document.getElementById('material_data').innerHTML = this.responseText;
                        let sm = document.getElementById('material_name_inp');
                        sm.value = '';
                    }
                    xhr.send('get_material');
                }


                function rem_material(val) {
                    let xhr = new XMLHttpRequest();
                    xhr.open("POST", "ajax/filters_crud.php", true);
                    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

                    xhr.onload = function () {
                        if (this.responseText == 1) {
                            alert('success', 'Material removed');
                            get_material();
                        }else if(this.responseText=='Material added'){
                            alert("error","Material is added in card")
                        } 
                        else {
                            alert('error', 'server down');
                        }
                    }
                    
                    xhr.send('rem_material=' + val);
                }

                // --------------------------------------------------------------------------------------

                window.onload = function () {
                    get_brand();
                    get_size();
                    get_price();
                    get_material();
                }
