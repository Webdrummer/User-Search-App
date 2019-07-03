<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Search</title>
</head>
<body>
    <div class="container">
        <h1>Search Users</h1>
        <form>
            Search User: <input id="search" type="text" class="form-control">
        </form>
        <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>


<script>

    let search = document.getElementById('search');

    search.addEventListener('keyup', showSuggestion);  


        function showSuggestion() {
            let str = search.value;
            console.log(str);

            if (str.length == 0) {
                document.getElementById('output').innerHTML = '';
                } else {
                // AJAX Request
                let xhr = new XMLHttpRequest();
                xhr.open('GET', 'suggest.php?q='+str, true);

                xhr.onload = function() {
                    if (this.status == 200) {
                        document.getElementById('output').innerHTML = this.responseText;
                        console.log(this.responseText);
                    }
                }
            xhr.send();
            }
        }

</script>
</body>
</html>