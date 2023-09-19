<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <form wire:submit.prevent="save">
        <div style="width:30%; height:300px; border:1px solid black; margin-top:10%;" class="mx-auto bg-dark pt-3">
            <div class="m-3">
                <label for="username" class="form-label text-light">Username:</label>
                <input type="text" class="form-control" wire:model="username" id="username" autocomplete="username">
            </div>

            <div class="m-3">
                <label for="email" class="form-label text-light">Email:</label>
                <input type="text" class="form-control" wire:model="email" id="email" autocomplete="email">
            </div>
            <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary px-4">Save</button>
        </div>
        </div>
</form>

</div>

</html>