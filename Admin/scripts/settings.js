
let general_data, contacts_data;

let general_s_form = document.getElementById('general_s_form');
let site_title_inp = document.getElementById('site_title_inp');
let site_about_inp = document.getElementById('site_about_inp');

let contacts_s_form = document.getElementById('contacts_s_form');

let team_s_form = document.getElementById('team_s_form');
let member_name_inp = document.getElementById('member_name_inp');
let member_picture_inp = document.getElementById('member_picture_inp');

function get_contacts() {

    let contact = ['address', 'gmap', 'pn1', 'pn2', 'email', 'whatsapp', 'insta', 'twitter'];
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        contacts_data = JSON.parse(this.responseText);
        contacts_data = Object.values(contacts_data);

        for (let i = 0; i < contact.length; i++) {
            document.getElementById(contact[i]).innerText = contacts_data[i + 1];
        }
        iframe.src = contacts_data[9];
        contact_inp(contacts_data);
    }
    xhr.send('get_contacts');
}

function contact_inp(data) {
    let contact_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'whatsapp_inp', 'insta_inp', 'twitter_inp', 'iframe_inp'];

    for (let i = 0; i < contact_inp_id.length; i++) {
        document.getElementById(contact_inp_id[i]).value = data[i + 1];
    }
};

function get_general() {
    let site_title = document.getElementById('site_title');
    let site_about = document.getElementById('site_about');


    let shutdown_toggle = document.getElementById('shutdown_toggle');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        general_data = JSON.parse(this.responseText);

        site_title.innerText = general_data.site_title;
        site_about.innerText = general_data.site_about;

        site_title_inp.value = general_data.site_title;
        site_about_inp.value = general_data.site_about;

        if (general_data.shutdown == 0) {
            shutdown_toggle.checked = false;
            shutdown_toggle.value = 0;
        } else {
            shutdown_toggle.checked = true;
            shutdown_toggle.value = 1;
        }

    };

    xhr.send('get_general');
}

general_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value);
})

contacts_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_contacts();
})

team_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_member();
})

function add_member() {

    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_picture_inp.files[0]);
    data.append('add_member', '');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);

    xhr.onload = function () {
        var myModal = document.getElementById('team-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 'inv_img') {
            alert('error', 'Only jpg or png Image are allowed');
        } else if (this.responseText == 'inv_size') {
            alert("error", "Image should be less then 2mb");
        } else if (this.responseText == 'upd_failed') {
            alert("error", "Upload failed");
        } else {
            alert('success', "New Member Added");
            member_name_inp.value = '';
            member_picture_inp.value = '';
            get_member();
        }
    };

    xhr.send(data);

}

function get_member(){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('team-data').innerHTML=this.responseText;
    }
    xhr.send('get_member');
}

function rem_member(val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if(this.responseText==1){
            alert('success', 'member removed');
            get_member();
        }else{
            alert ('error', 'server down');
        }
    }
    xhr.send('rem_member='+val);
}

function upd_contacts() {
    let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'whatsapp', 'insta', 'twitter', 'iframe'];
    let contact_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'whatsapp_inp', 'insta_inp', 'twitter_inp', 'iframe_inp'];
    let data_str = "";

    for (let i = 0; i < index.length; i++) {

        data_str += index[i] + "=" + document.getElementById(contact_inp_id[i]).value + "&";
    }
    data_str += "upd_contacts";

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        var myModal = document.getElementById('contact-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();


        if (this.responseText == 1) {
            alert('success', 'Data Updated');
            get_contacts();
        } else {
            alert("error", "No Changes Made");
        }
    };

    xhr.send(data_str);

}

function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('success', 'Data Updated');
            get_general();
        } else {
            alert("error", "No Changes Made");
        }
    };

    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
}

function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/setting_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {

        if (this.responseText == 1 && general_data.shutdown == 0) {
            alert('error', 'Site has been Shutdown!');
        } else {
            alert("success", "Shutdown mode off!");
        }
        get_general();


    };

    xhr.send('upd_shutdown=' + val);
}

window.onload = function () {
    get_general();
    get_contacts();
    get_member();
}