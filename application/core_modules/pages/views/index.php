<h3><?= $page->title; ?></h3>
<script type="text/javascript">
    $(document).ready(function(){
        $('#left-sidebar').corner("round 10px");
        $('ul.photos-list-intro li').corner("round 10px");
        $('#right-sidebar').corner("round 10px");
        $('#middle-content').corner("round 10px");
    ;})
</script>
<?=stripslashes($page->body);?>