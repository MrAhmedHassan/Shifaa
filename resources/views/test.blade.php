<!DOCTYPE html>

<html>

<head>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body>



<div class="container">


    <table id ='myTable' class="table table-bordered">
        <thead>
        <tr>
            <td>#</td>
            <td>الصورة</td>
            <td>اسم الطبيب</td>
            <td>البريد الالكتروني</td>
            <td>التحكم</td>
        </tr>
        </thead>

<tbody>
            <tr class="text-center">
                <td>hghgh</td>
                <td><img src="" class="img-rounded user_thumb"></td>
                <td>fffff</td>
                <td>dddddd</td>
                <td>

                    <form action="/doctors/5" style="display: inline-flex" method="post">
                        {{method_field('DELETE')}}
                        @csrf
                        <button class="glyphicon glyphicon-remove" data-toggle="tooltip"
                                data-placement="top" title="حذف" style="color: brown"></button>
                    </form>


                </td>
            </tr>
</tbody>

    </table>

</div>

</body>

<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


<script>

    $(document).ready( function () {
        $('#myTable').DataTable();
        console.log($('#myTable'));
    } );
</script>

</html>
