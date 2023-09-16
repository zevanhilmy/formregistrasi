<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            background-color: #82A0D8;
            overflow: hidden;
        }

        li {
            float: left;
        }

        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #4F709C;
            color: black;
        }

        .form-container,
        .table-container {
            display: none;
        }

        .form-container.active,
        .table-container.active {
            display: block;
        }

        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        input.form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        #listregis table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            border: 1px solid #ddd;
        }

        #listregis th,
        #list td {
            padding: 10px;
            text-align: left;
        }

        #listregis th {
            background-color: #f2f2f2;
        }

        #listregis tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        #listregis tr:hover {
            background-color: #AED2FF;
        }
    </style>
</head>

<body>
    <ul>
        <li>
            <a href="#regis"> Form Registrasi </a>
        </li>
        <li>
            <a href="#showall"> List Pendaftar </a>
        </li>
    </ul>

    <div class="form-container active" id="regis">
        <form id="formregis">
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" class="form-control" id="namalengkap" required>
            </div>
            <div class="form-group">
                <label>Nama Panggilan</label>
                <input type="text" class="form-control" id="namapanggilan" required>
            </div>
            <div class="form-group">
                <label>Usia</label>
                <input type="number" class="form-control" id="usia" min="25" required>
            </div>
            <div class="form-group">
                <label>Uang Saku (Rp100.000 - Rp1.000.000)</label>
                <input type="number" class="form-control" id="uangsaku" min="100000" max="1000000" required>
            </div>
            <button type="submit" class="btn-primary">Daftar</button>

        </form>
    </div>

    <div class="table-container" id="listregis">
        <div>
            <table>
                <thead>
                    <tr>
                        <th>Nama Lengkap</th>
                        <th>Nama Panggilan</th>
                        <th>Usia</th>
                        <th>Uang Saku</th>
                    </tr>
                </thead>
                <tbody id="listdataregis">
                </tbody>
            </table>
            <div style="text-align: center;" id="datahitung"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="registrasi.js" type="module"></script>
    <script src="script.js" type="module"></script>

    <script>
        function showElementBasedOnHash() {
            var hash = window.location.hash;

            if (hash === '#showall') {
                $('.table-container').addClass('active');
                $('.form-container').removeClass('active');
            } else {
                $('.form-container').addClass('active');
                $('.table-container').removeClass('active');
            }
        }
        $(document).ready(function() {
            showElementBasedOnHash();

            $(window).on('hashchange', function() {
                showElementBasedOnHash();
            });
        });
    </script>
</body>

</html>