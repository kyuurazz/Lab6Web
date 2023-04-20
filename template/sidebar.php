<div class="sidebar">
    <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../home" : "home" ?>">Home</a>
    <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../about" : "about" ?>">About</a>
    <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "" : "" ?>">Event</a>
    <a href="<?= strpos(@$_REQUEST["mod"], "/") ? "../contact" : "contact" ?>">Contact</a>
</div>