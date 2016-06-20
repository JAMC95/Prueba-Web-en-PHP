<div class = "modal fade datails-1" id="details-4" tableindex="-1" role="dialog" aria-labelledby="details-4" ariana hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

    <div class="modal-header">
      <button class="close" type="button" data-dismiss="modal" arial-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title text-center">Polo</h4>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <div class="center-block">
                <img src="images/polo.jpg" alt="Polo 198" class="details img-responsive"/>
              </div>
            </div>
            <div class="col-sm-6" >
              <h4>Details</h4>
              <p>
                These Polo are Amazing, you must try and buy then. Get then while they last
              </p>
              <hr/>

              <p>Price: $15.99</p>
              <p>Brand:polo</p>

              <form action="add_cart.php" method="post">
                <div class="form group">
                  <div class="col-xs-3">
                    <label for="quantity" id="quantity-label">Quantity:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"/>
                  </div>
          <br/>
          <br/>
          <br/>

            <div class="form-group">
                <label for="size">Size:</label>
              <select name="size" id="size" class="form-control">
                    <option value=""> </option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    <option value="XXL">XXL</option>
              </select>
            </div>
          </div>

            </form>
          </div>
        </div>
      </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button class="btn btn-warning" data-dimiss="submit"><span class="glyphicon glyphicon-shopping-cart"> </span>Add to cart</button>
      </div>
    </div>
  </div>
</div>
