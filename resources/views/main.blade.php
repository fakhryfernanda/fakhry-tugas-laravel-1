<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <?php
        $users = [
            [
                "nama" => "Fakhry",
                "foto" => "https://images.unsplash.com/photo-1589571894960-20bbe2828d0a?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8ZmVtYWxlfHx8fHx8MTY3MDUxMjcxNA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Yaudah lah ya",
                "active" => "true",
                "alamat" => "Bekasi",
                "role" => "admin"
            ],
            [
                "nama" => "Roro",
                "foto" => "https://images.unsplash.com/photo-1544005313-94ddf0286df2?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8ZmVtYWxlfHx8fHx8MTY3MDUxMjc2OA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Iya ga si",
                "active" => "true",
                "alamat" => "Jakarta",
                "role" => "admin"
            ],
            [
                "nama" => "Dodo",
                "foto" => "https://images.unsplash.com/photo-1600275669439-14e40452d20b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8ZmVtYWxlfHx8fHx8MTY3MDUxMjk1NA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Yaudah lah ya",
                "active" => "true",
                "alamat" => "Bandung",
                "role" => "user"
            ],
            [
                "nama" => "Koko",
                "foto" => "https://images.unsplash.com/photo-1489980557514-251d61e3eeb6?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFsZXx8fHx8fDE2NzA1MTI5ODY&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Apa sih lo",
                "active" => "true",
                "alamat" => "Semarang",
                "role" => "user"
            ],
            [
                "nama" => "Yoyo",
                "foto" => "https://images.unsplash.com/photo-1541577141970-eebc83ebe30e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFsZXx8fHx8fDE2NzA1MTMwMTE&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "admin"
            ],
            [
                "nama" => "Nana",
                "foto" => "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8ZmVtYWxlfHx8fHx8MTY3MDUxMzgzMQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "admin"
            ],
            [
                "nama" => "Bobi",
                "foto" => "https://images.unsplash.com/photo-1604244420088-ec41206f5271?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFsZXx8fHx8fDE2NzA1MTM4NTk&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "user"
            ],
            [
                "nama" => "Albert",
                "foto" => "https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8bWFsZXx8fHx8fDE2NzA1MTM4Nzk&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "user"
            ],
            [
                "nama" => "Anggun",
                "foto" => "https://images.unsplash.com/photo-1597586124394-fbd6ef244026?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8ZmVtYWxlfHx8fHx8MTY3MDUxMzkxMA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "admin"
            ],
            [
                "nama" => "Rudi",
                "foto" => "https://images.unsplash.com/photo-1557484460-a08474899084?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8Ym95fHx8fHx8MTY3MDUxMzkzNA&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "true",
                "alamat" => "Aceh",
                "role" => "user"
            ],
            [
                "nama" => "Lusi",
                "foto" => "https://images.unsplash.com/photo-1633279309534-f761427548b6?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1200&ixid=MnwxfDB8MXxyYW5kb218MHx8Z2lybHx8fHx8fDE2NzA1MTM5NTk&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=1200",
                "bio" => "Capekkk",
                "active" => "false",
                "alamat" => "Aceh",
                "role" => "admin"
            ],
        ];

        $filter = [
            "active" => "false",
            "role" => "admin"
        ];

        class Filter
        {
            public static string $admin;
            public static string $active;
        }

        class Role
        {
            const ADMIN = "admin";
            const USER = "user";
        }
    ?>

    <div class="container">
        <div class="flex items-center gap-3">
            <p>Admin: </p>
            <select class="border p-1">
                <option>{{ Role::ADMIN }}</option>
                <option>{{ Role::USER }}</option>
            </select>
        </div>
    </div>

    <div class="container flex flex-wrap gap-5">
        {{-- <div class="w-[300px] shadow-lg p-5 text-center">
            <h2 class="text-2xl font-semibold mb-5">Nama</h2>
            <img src="images/sample.png" alt="">
            <p>Bio</p>
            <p>Active</p>
            <p>Alamat</p>
            <p>Role</p>
        </div> --}}
        @foreach ($users as $user)
            @if ($filter["active"] === $user["active"] && $filter["role"] === $user["role"])
                <div class="w-[300px] shadow-lg p-5 flex flex-col items-center">
                    <h2 class="text-2xl font-semibold mb-5">{{ $user["nama"] }}</h2>
                    <div class="rounded-full w-40 h-40 bg-yellow-50">
                        <img src="{{ $user["foto"] }}" alt="user-photo" class="rounded-full w-40">
                    </div>
                    <p>{{ $user["bio"] }}</p>
                    <p>{{ $user["active"] }}</p>
                    <p>{{ $user["alamat"] }}</p>
                    <p>{{ $user["role"] }}</p>
                </div>
            @endif
        @endforeach
    </div>
</body>
</html>