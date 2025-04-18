<?php include 'header.php'; ?>

<br><br><br><br><br><br><br>


<div>
    <p>
        <a
            data-fancybox="gallery"
            data-src="https://lipsum.app/id/2/1024x768"
            data-caption="Optional caption,&lt;br /&gt;that can contain &lt;em&gt;HTML&lt;/em&gt; code">
            <img src="https://lipsum.app/id/2/200x150" />
        </a>
        <a data-fancybox="gallery" data-src="https://lipsum.app/id/3/1024x768">
            <img src="https://lipsum.app/id/3/200x150" />
        </a>

        <a data-fancybox="gallery" data-src="https://lipsum.app/id/4/1024x768">
            <img src="https://lipsum.app/id/4/200x150" />
        </a>
    </p>

    <div id="dialog-content" style="display:none;max-width:500px;">
        <h2>Hello, world!</h2>
        <p>
            <input type="text" value="" />
        </p>
        <p>
            Try hitting the tab key and notice how the focus stays within the dialog
            itself.
        </p>
        <p>
            To close dialog hit the esc button, click on the overlay or just click the
            close button.
        </p>
        <p>
            Element used to launch the modal would receive focus back after closing.
        </p>
    </div>
    <p>
        <button data-fancybox data-src="#dialog-content">Launch Dialog</button>
    </p>
</div>


<?php include 'footer.php'; ?>

<script>
    $(document).ready(function() {

        Fancybox.bind("[data-fancybox]", {});

    });
</script>