<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container" id="target">
        <div class="">
        </div>
        <?= $this->include('layout/navbar'); ?>
        <!-- main -->


        <?= $this->renderSection('content') ?>


        <!-- <a href="" class="btn"></a> -->
    </div>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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



        // priview

        function priviewimg1() {
            const gambar1 = document.querySelector('#gambar1');
            const gambar1Label = document.querySelector('.vbn');
            const imgpriview1 = document.querySelector('.img-priview');

            // const gambar1save = 'no file cousen';
            // const gambar1save = document.querySelector('#gambar1save');

            const filegambar1 = new FileReader();
            filegambar1.readAsDataURL(gambar1.files[0]);

            filegambar1.onload = function (e) {
                imgpriview1.src = e.target.result;
            }
        }

        //enter summit keyword search
        const input = document.getElementById("myInput");

        function searchklick() {
            input.addEventListener("keyup", function (event) {
                if (event.keyCode === 13) {
                    event.preventDefault();
                    document.getElementById("myBtn").click();
                }
            });
        }


        // madal priview iamge


        const images = document.querySelectorAll(".gambar_item img");
        const gambar_item = document.querySelectorAll(".gambar_item");
        let imgSrc;
        // get images src onclick
        images.forEach((img) => {
            img.addEventListener("click", (e) => {
                imgSrc = e.target.src;
                console.log(imgModal);
                imgModal(imgSrc);


            });
        });

        let imgModal = (src) => {
            const modal = document.createElement("div");
            modal.setAttribute("class", "modal");
            //add the modal to the main section or the parent element
            document.querySelector(".container").append(modal);
            //adding image to modal
            const newImage = document.createElement("img");
            newImage.setAttribute("src", src);
            modal.append(newImage)

            const closeBtn = document.createElement("i");
            closeBtn.setAttribute("class", "fas fa-times closeBtn");
            //close function
            closeBtn.onclick = () => {
                modal.remove();
            };

            $(document).keyup(function (e) {
                if (e.keyCode == 27) { // Esc
                    modal.remove();
                }
            });

            modal.append(newImage, closeBtn);



            // $(newImage).click(function () {
                
            //         $(newImage).height(100%);
                
            // });

            
            // $(newImage).toggle(
            //     function(){$(newImage).width(500);},
            //     function(){$(newImage).width(100);
            // });




        };
    </script>
</body>

</html>