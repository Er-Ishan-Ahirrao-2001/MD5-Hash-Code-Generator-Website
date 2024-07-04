<link rel="stylesheet" href="extra.css">

<p>Your String : </p>
<?php
    $data = $_POST['myfile'];
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

<p>MD Hash ID : </p>
<?php
    $id = md5($data);
?>
<input type="text" name="id" id="md5" value="<?php echo $id; ?>">

<button onclick="copyToClipboard1()">Copy Text</button>

<script>
function copyToClipboard1() {
    var copyText = document.getElementById("md5");
    copyText.select();
    copyText.setSelectionRange(0, 99999); /* For mobile devices */
    document.execCommand("copy");
    alert("Text copied to clipboard");
}
</script>
