<!DOCTYPE html>
<? require_once('generator.php') ?>
<html>
<head>
    <meta charset="utf-8" />
    <title>Graphviz</title>
    <link rel="stylesheet" href="application.css" />
</head>

<body<?= $bError?' class="error"':''?>>
<h1>Generate Graphviz Graphs</h1>
    <!-- @TODO: Add useful Graphviz links. Manual, attributes, shapes, etc. -->
    <!-- @TODO: Add button to switch layout of textarea/image from LR to TB -->
    <!-- @TODO: Improve Application styles (also, responsive...?) -->
    <form method="POST">
        <input type="hidden" name="token" value="<?=$sToken?>" />
        <textarea name="graph"><?=$sGraph?></textarea>

        <button>Render graph in graphviz</button>
        <fieldset>
        <legend>options:</legend>
        <label><input type="checkbox" name="verbose" <?=($bVerbose?' checked="checked"':'')?>/> verbose</label>
        <label><input type="checkbox" name="show-previous" <?=($bShowPrevious?' checked="checked"':'')?>/> show previous graph</label>
<!-- @TODO: Add choice of output format 
        <select>
            <option>PNG</option>
            <option>PDF</option>
            <option>SVG</option>
        </select>
-->
        </fieldset>
    </form>

    <div class="image-container">
        <?=$sGraphHtml?>
        <?=($bShowPrevious && isset($sPreviousToken)?'<img src="./file/' . $sPreviousToken .'.dot.png" class="previous-graph"/>':'')?>
    </div>
    <footer>
        <p><?=$sToken?></p>
        <pre class="output-console"><?=$sOutput?></pre>
    </footer>
    <script>
    </script>
</body>
</html>