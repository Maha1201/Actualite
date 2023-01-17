<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href='style.css' rel='stylesheet'>
</head>

<body style="background-color:#ffe4e6;">


    <!-- Pour rétrécir la page un peu (ajouter /div en bas) -->
    <!-- <div class="w-full px-64 mx-auto"> -->


    <!-- Navbar en burger, s'ouvre OnClick -->
    <nav class="flex items-center justify-between flex-wrap bg-rose-200 p-10">
        <div class="flex items-center flex-shrink-0 text-rose-800 mr-6">
            <a href="Index.php"><span class="font-bold text-xl tracking-tight">Logo</span></a>
        </div>

        <div class="lg:flex lg:items-center lg:w-auto">
            <div>
                <button class="block text-xl text-rose-100 inline-block mt-0 hover:text-white bg-rose-800 hover:bg-rose-700 px-5 py-2 rounded-full" id="burger"><i class='bx bx-menu'></i></button>
            </div>
            <div id="sidemenu" class="invisible"><?php include('Page_Navbar.html'); ?></div>
        </div>
    </nav>

    
    <!-- Test Modal -->


        <!-- Attaquants -->
        <section class="text-rose-800 border-b-2 border-rose-300">
        <div class="text-3xl font-bold flex justify-center mt-10">Attaquants</div>
        <!-- Flex wrap pour que les divs aillent à la ligne -->
        <div class="flex flex-row flex-wrap justify-center m-8">
            <div class="mr-24">
                <button onclick="toggleModal('modal-id')">
                    <img src="img/Antoine_LEAUTEY.jpg" alt="joueur random" class="h-96 rounded-lg">
                </button>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Antoine LEAUTEY
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Ange_CHIBOZO.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Ange CHIBOZO
                </div>
            </div>
            <div class="mr-24">          
                <a href="#">
                    <img src="img/Jeremy_GELIN.jpg" alt="joueur random" class="h-96 rounded-lg">
                </a>
                <div class="text-2xl font-semibold mt-4 flex justify-center mb-4">
                    Jeremy GELIN
                </div>
            </div>
    </section>





    <button class="bg-pink-400 text-white active:bg-pink-500 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none mr-1 mb-1 ease-linear transition-all duration-300" type="button" onclick="toggleModal('modal-id')">
        Bouton
    </button>

    <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center" id="modal-id">
        <div class="relative w-auto my-6 mx-auto max-w-3xl">
            <!--content-->
            <div class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-slate-200 rounded-t">
                    <h3 class="text-3xl font-semibold">
                    Prénom NOM
                    </h3>
                    <button class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none" onclick="toggleModal('modal-id')">
                        <span class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            <i class='bx bx-x'></i>
                        </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <p class="my-4 text-slate-500 text-lg leading-relaxed">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio, atque reprehenderit corrupti neque velit repellendus!
                    </p>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-slate-200 rounded-b">
                    <button class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button" onclick="toggleModal('modal-id')">
                    Close
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="modal-id-backdrop"></div>




    <!-- Footer -->
    <?php include('Footer.html'); ?>


<script src="script.js"></script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</body>

</html>