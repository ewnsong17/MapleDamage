<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>데미지 계산기!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

</head>
<body>

<!-- CONTENT -->

<div class="further">

    <section>

        <select id="job-select">
            <option value="mage_il">썬콜</option>
            <option value="phantom">팬텀</option>
        </select>
        
        <button onclick="fnSend()">데미지 계산</button>

        <span>데미지:<p id="damage"></p></span>

    </section>

</div>

<!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

<footer>

</footer>

<!-- SCRIPTS -->

<script>
    function fnSend() {
        let job = document.getElementById('job-select').selectedIndex;
        if (job >= 0) {
            let xhr = new XMLHttpRequest();
            xhr.open('POST', '/damage/'+job, true);

            xhr.send();

            xhr.onload = () => {
                if (xhr.status === 200) {
                    console.log(xhr.response);
                } else {
                    console.log('error');
                    console.log(xhr.response);
                }
            }
        }
    }
</script>

<!-- -->

</body>
</html>
