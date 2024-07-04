<link rel="stylesheet" href="intern.css">

<p><b>Your String: </b></p>
<?php
    $filename="data1.txt";
    $data = $_POST['msg'];
    file_put_contents($filename,$data);
?>

<input type="text" name="data" id="string" value="<?php echo $data; ?>">

<button onclick="copyToClipboard()">Copy Text</button>

<script>
function copyToClipboard() {
    var copyText = document.getElementById("string");
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    document.execCommand("copy");
    alert("Text copied to clipboard");
}
</script>

<!-- **************************************************************** -->

<p><b>MD5 Hash Value: </b></p>
<?php
    $filename="data2.txt";
    $id = md5($data);
    file_put_contents($filename,$id);
?>

<input type="text" name="id" id="id1" value="<?php echo $id; ?>">

<button onclick="copyToClipboard1()">Copy Text</button>


<script>
function copyToClipboard1() {
    var copyText = document.getElementById("id1");
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    document.execCommand("copy");
    alert("Text copied to clipboard");
}
</script>

