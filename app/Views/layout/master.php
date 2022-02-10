<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?= $this->include('layout/navbar'); ?>
        <!-- main -->
       
        <?= $this->renderSection('content') ?>
        

        
    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        // menu toggle
        let toggle = document.querySelector('.toggle');
        let navigation = document.querySelector('.navigation');
        let main = document.querySelector('.main');

        toggle.onclick = function () {
            navigation.classList.toggle('active');
            main.classList.toggle('active');
        }


        //add hovered class in selected list item

        let list = document.querySelectorAll('.navigation li.menu');
        let cc = document.querySelectorAll('.navigation li.mode');

        function acr() {
            cc.forEach((cc) =>
                this.classList.add('hh'));
        }
        cc.forEach((item) =>
            item.addEventListener('mouseover', acr))


        function activeLink() {
            list.forEach((item) =>
                item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
            item.addEventListener('mouseover', activeLink));

        const tt = document.getElementById('toggle');
        const body = document.body;
        let nt = document.querySelector('.navigation');
        tt.addEventListener('input', (e) => {
            const isChecked = e.target.checked;

            if (isChecked) {
                // body.classList.add('dark-theme');
                main.classList.add('dark-theme');
                nt.classList.add('dark-theme');
            } else {
                main.classList.remove('dark-theme');
                nt.classList.remove('dark-theme');
            }
        });
    </script>
</body>

</html>