    <!-- Bootstart script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstart script ends -->

    <script>
        //  alert 
        function alert(type, message) {

            let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
            let element = document.createElement('div')

            element.innerHTML = `
                    <div class="alert ${bs_class} alert-dismissible fade show custom-alert" id="" role="alert">
                    <strong class="m-3">${message}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    `;
            document.body.append(element);
            setTimeout(remAlert,2500);
        }

        function remAlert(){
            document.getElementsByClassName('alert')[0].remove();
        }

        function setActive() {
            let navbar = document.getElementById('dashboard_menu');
            let a_tags = navbar.getElementsByTagName('a');

            for (let i = 0; i < a_tags.length; i++) {
                let file = a_tags[i].href.split("/").pop();
                let file_name = file.split('.')[0];
                if (document.location.href.indexOf(file_name) >= 0) {
                    a_tags[i].classList.add('active');

                }
            }
        }
        setActive();
    </script>