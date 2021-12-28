<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<span id="num123" value={{$nowNumber}}>{{$nowNumber}}</span>
<div>
    <button id="1" >+1</button>
    <button id="10" >+10</button>
    <button id="clear">清空</button>
</div>

<div>
    <input type="text" id="plusnum">
    <button id="plus">加</button>
</div>

<div>
    <input type="text" id="lessnum">
    <button id="less">減</button>
</div>

<div>
    <input type="text" id="Multiplynum">
    <button id="Multiply">乘</button>
</div>

<div>
    <input type="text" id="dividenum">
    <button id="divide">除</button>
</div>

</body>
<script src ="{{asset('js/jquery-3.6.0.min.js')}}"></script>
<script>
    $('#1').click(function () {
        var num = document.getElementById("num123").innerHTML;
        $.ajax({
            type: "post",
            url: "plus1",
            data: { "_token": "{{ csrf_token() }}", type: '3', num },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    });
    $('#10').click(function () {
        var num = document.getElementById("num123").innerHTML;
        $.ajax({
            type: "post",
            url: "plus10",
            data: { "_token": "{{ csrf_token() }}", type: '3', num },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    });
    $('#clear').click(function () {
        var num = document.getElementById("num123").innerHTML;
        $.ajax({
            type: "post",
            url: "clear",
            data: {"_token": "{{ csrf_token() }}", type: '4', num },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;

            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    })
    $('#plus').click(function () {
        var num = document.getElementById("num123").innerHTML;
        var plusnum = document.getElementById("plusnum").value;
        $.ajax({
            type: "post",
            url: "plus",
            data: {"_token": "{{ csrf_token() }}", type: '5', num, plusnum },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    })
    $('#less').click(function () {
        var num = document.getElementById("num123").innerHTML;
        var lessnum = document.getElementById("lessnum").value;
        $.ajax({
            type: "post",
            url: "less",
            data: {"_token": "{{ csrf_token() }}", type: '6', num, lessnum },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    })
    $('#Multiply').click(function () {
        var num = document.getElementById("num123").innerHTML;
        var Multiplynum = document.getElementById("Multiplynum").value;
        $.ajax({
            type: "post",
            url: "Multiply",
            data: {"_token": "{{ csrf_token() }}", type: '7', num, Multiplynum },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    })
    $('#divide').click(function () {
        var num = document.getElementById("num123").innerHTML;
        var dividenum = document.getElementById("dividenum").value;
        $.ajax({
            type: "post",
            url: "divide",
            data: {"_token": "{{ csrf_token() }}", type: '8', num, dividenum },
            dataType: "json",
            success: function (data) {
                document.getElementById("num123").innerHTML = data;
            }, error: function (xhr, ajaxOptions, thrownError) {
                alert("錯誤");
            }
        })
    });
</script>
</html>
