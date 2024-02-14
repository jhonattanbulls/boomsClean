@extends('layouts.plantilla')

@section('title', 'Crear pedido');

@section('content')
@php
$grandTotal = 0;
@endphp


    <div class="container-full">
        <!-- Content Header (Page header) -->
        {{-- <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="me-auto">
                    <h4 class="page-title">Listado de clientes</h4>
                </div>

            </div>
        </div> --}}
        <section class="content">
			<div class="row">
                <div class="col-lg-12 col-12">
                    <div class="box">
                      <div class="box-header with-border">
                        <h4 class="box-title">Registro de pedido</h4>
                      </div>
                      <!-- /.box-header -->
                      <form class="form" action="{{ route('invoices.store') }}" method="POST">

                          @csrf
                          <div class="box-body">
                            <div class="row">
                                <div class="col-5">
                                        <div class="form-group">
                                            <label class="form-label">Clientes*</label>
                                            <select class="form-select" id="select_client_id" name="select_client_id">
                                            <option value="">Selecciona un cliente</option>
                                            @foreach ($clients as $client)
                                                <option value="{{ $client->id }}">{{ $client->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-label">Vendedores*</label>
                                        <select class="form-select" id="select_seller_id" name="select_seller_id">
                                            <option value="">Selecciona un vendedor</option>
                                            @foreach ($sellers as $seller)
                                            <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-centered mb-0">
                                                    <thead class="table-light">
                                                        <tr>
                                                            <th>Producto</th>
                                                            <th>Precio</th>
                                                            <th>Cantidad</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($products as $product)
                                                            <tr  data-product-id="{{$product->id}}">
                                                                <td>
                                                                    {{-- <img src="{{ asset('images/product/' . $product->image) }}" alt="" class="bg-gray-300 rounded me-3" height="64" /> --}}
                                                                    <p class="m-0 d-inline-block align-middle fs-16">
                                                                        <a href="#" class="text-body">{{ $product->name }}</a>
                                                                        <br>

                                                                    </p>
                                                                </td>
                                                                @php
                                                                $productTotal = $product->price * $product->quantity;
                                                                $grandTotal = $productTotal;
                                                                @endphp
                                                                <td name="price" id="price">${{ number_format($product->price, 2) }}</td>
                                                                <td><input type="number" min="1" value="{{ $product->quantity }}" name="quantity" id="quantity" class="form-control" placeholder="Cantidad" style="width: 90px;"></td>
                                                                <td name="total-price-{{$product->id}}" id="total-price-{{$product->id}}">${{ number_format($productTotal, 2) }}</td>
                                                                <input type="hidden" name="_token" id="_token" value="<?php echo csrf_token(); ?>">
                                                                {{-- <td><a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a></td> --}}
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div> <!-- end table-responsive-->

                                            <!-- action buttons-->
                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                </div> <!-- end col -->
                                                <div class="col-sm-6">
                                                    <div class="text-sm-end">
                                                        <a href="#" id="create-order-button" class="btn btn-primary disabled"> Crear pedido </a>
                                                    </div>
                                                </div> <!-- end col -->
                                            </div> <!-- end row-->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-lg-4">
                                            <div class="border p-3 mt-4 mt-lg-0 rounded">
                                                <h4 class="header-title mb-3">Detalles de pedidos</h4>

                                                <div class="table-responsive">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                            <tr>
                                                                <td>Sub Total :</td>
                                                                <td id="sub-total" class="text-fade fw-500">$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Impuestos(16%) : </td>
                                                                <td id="taxes" class="text-fade fw-500">-$0.00</td>
                                                            </tr>

                                                            <tr>
                                                                <th>Total :</th>
                                                                <th id="grand-total">$0.00-{{$grandTotal}}</th>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive -->
                                            </div>


                                            {{-- <div class="box mt-3 no-shadow b-1 border-light">
                                              <div class="box-header">
                                                <h4 class="box-title">Soporte</h4>
                                              </div>

                                              <div class="box-body">
                                                <h4 class="fw-500"><i class="ti-mobile"></i> +58 123 1234 <span class="text-primary">(Llamada gratis)</span></h4>
                                                <p class="text-fade">Contáctanos para cualquier consulta. Estamos disponibles 24x7x365.</p>
                                              </div>
                                            </div> --}}

                                        </div> <!-- end col -->

                                    </div> <!-- end row -->
                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div>
                      </form>
                    </div>
                    <!-- /.box -->
                </div>

            </div>

        </section>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>

        // $(document).ready(function() {
        // // Actualizar total al cambiar la cantidad
        // var sumTotal = 0;
        // var products = [];
        // var data = [];
        // $('input[type="number"]').change(function() {
        //     const row = $(this).closest('tr'); // Obtener la fila más cercana
        //     const productId = row.data('product-id'); // Obtener el ID del producto de la fila
        //     const price = parseFloat(row.find('#price').text().slice(1));
        //     const quantity = parseInt($(this).val());

        //     const totalPrice = price * quantity;
        //     const totalPriceElement = row.find('#total-price-' + productId); // Buscar el elemento `total-price` con el ID del producto
        //     totalPriceElement.text('$' + totalPrice.toFixed(2));

        //     const productIndex = products.findIndex(product => product.productId === productId);

        //     if (productIndex !== -1) {
        //         products[productIndex] = {
        //         productId,
        //         quantity,
        //         totalPrice,
        //         };
        //     } else {
        //         products.push({
        //         productId,
        //         quantity,
        //         totalPrice,
        //         });
        //     }
        //     let subTotal = 0;
        //     for (const product of products) {
        //         subTotal += product.totalPrice;
        //     }

        //     const taxes = subTotal * 0.16;
        //     $('#taxes').text('$' + taxes.toFixed(2));

        //     $('#sub-total').text('$' + (subTotal - taxes));

        //     const grandTotal = subTotal;
        //     $('#grand-total').text('$' + grandTotal.toFixed(2));

        //     let seller_id = parseInt($('#select_seller_id').val());
        //     let client_id = parseInt($('#select_client_id').val());

        //     data = {
        //         seller_id,
        //         client_id,
        //         products,
        //         subTotal: subTotal - taxes,
        //         grandTotal,
        //     };
        //     console.log(data);
        // });
        // });


        $(document).ready(function() {
  // Data and state variables
  var sumTotal = 0;
  var taxes = 0.16;
  var products = [];
  var data = [];
  var isValidData = false; // Initially assume validation fails

  // Update total on quantity change, ensuring valid number entry
  $('input[type="number"]').change(function() {
    const row = $(this).closest('tr');
    const productId = row.data('product-id');
    const quantity = parseInt($(this).val());

    // Validate quantity: non-negative integer
    if (isNaN(quantity) || quantity < 0) {
      $(this).addClass('invalid'); // Visually indicate invalid input
      isValidData = false;
      return; // Stop execution if invalid
    } else {
      $(this).removeClass('invalid'); // Clear previous error
    }

    // Proceed with valid quantity processing
    const price = parseFloat(row.find('#price').text().slice(1));
    const totalPrice = price * quantity;
    const totalPriceElement = row.find('#total-price-' + productId);
    totalPriceElement.text('$' + totalPrice.toFixed(2));

    // Update `products` array and calculate totals
    handleProductUpdate(productId, quantity, totalPrice);
  });

  // Handle order creation on button click
  $('#create-order-button').click(function() {
    if (isValidData) {
      const seller_id = parseInt($('#select_seller_id').val());
      const client_id = parseInt($('#select_client_id').val());

      // Additional data validation or processing can be added here

      // Send AJAX request to create order
      $.ajax({
        url: "/invoices", // Replace with your actual route
        type: "POST",
        data: {
          seller_id,
          client_id,
          products,
          subTotal: sumTotal - (sumTotal * taxes),
          grandTotal: sumTotal
        },
        headers: {
            'X-CSRF-TOKEN': $('#_token').val() // Substitute with your retrieved token
        },
        success: function(response) {
          // Handle successful order creation (e.g., redirect, success message)
          alert("Order created successfully!");

            // Redirect to index after 3 seconds
            setTimeout(function() {
            window.location.href = "/invoices";
            }, 2000);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Handle order creation failure (e.g., display error message)
          console.error("Error creating order:", errorThrown);
        }
      });
    } else {
      alert("Please enter valid quantities for all products before creating the order.");
    }
  });

  // Function to handle product updates and totals
  function handleProductUpdate(productId, quantity, totalPrice) {
    const productIndex = products.findIndex(product => product.productId === productId);

    if (productIndex !== -1) {
      products[productIndex] = {
        productId,
        quantity,
        totalPrice
      };
    } else {
      products.push({
        productId,
        quantity,
        totalPrice
      });
    }

    let subTotal = 0;
    for (const product of products) {
      subTotal += product.totalPrice;
    }

    const taxes = subTotal * 0.16;
    $('#taxes').text('$' + taxes.toFixed(2));

    $('#sub-total').text('$' + (subTotal - taxes));

    const grandTotal = subTotal;
    $('#grand-total').text('$' + grandTotal.toFixed(2));

    sumTotal = subTotal; // Update global total

    isValidData = products.every(product => product.quantity > 0); // Set validity flag based on all products having positive quantities
    $('#create-order-button').removeClass('disabled').toggleClass('disabled', !isValidData); // Enable/disable button based on validity
  }
});

    </script>

@endsection()
