<form action="" id="stock-form">
    <label for="stock">Quantity: </label>
    <select name="stock">
        <?php for ($i = 1; $i <= $stock; $i++): ?>
            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php endfor; ?>
    </select>
    <input type="hidden" name="productID" id="productID" value="<?php the_ID(); ?>" />
    <button type="submit">Add to your collection</button>
</form>