<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <x-navbar />
    <div class="container mt-5">
        <x-detailspictures />
        <x-hotelcomponents />
        <div class="row d-flex align-items-center my-5">
            <div class="col-4">
                <x-room />
            </div>
            <div class="col-4">
                <x-room />
            </div>
            <div class="col-4">
                <x-room />
            </div>
        </div>
    </div>
    <x-footer />
    
</body>
</html>