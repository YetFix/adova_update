<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>

    <style>
    .container {
        position: relative;
        width: 100%;
        overflow: hidden;
        padding-top: 56.25%;
        /* 16:9 Aspect Ratio */
    }

    .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    </style>

<body>
    @if($product->pdf)
    <div class="container">
        <iframe src="{{URL::asset('pdfs')}}/{{$product->pdf}}" class="responsive-iframe"></iframe>
    </div>
    @else
    <div class="container">
        <div class="product">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12  mx-auto">
                        <div class="card" style="width:100%">
                            <div class="card-header">
                                <h5 class="card-title text-center">{{$product->name}}</h5>
                            </div>
                            <div class="card-body">
                                @if($product->desc)
                                <div class="feat">
                                    <h5>Description</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->desc}}</p>
                                    </p>
                                </div>
                                @endif
                                <div class="feat">
                                    @if($product->compostion)
                                    <h5>Composition</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->compostion}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->indication)
                                    <h5>Indication</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->indication}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->dosage)
                                    <h5>Dosage & Administration</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->dosage}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->contraindication)
                                    <h5>Contraindication</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->contraindication}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->interaction)
                                    <h5>Interaction</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->interaction}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->precaution)
                                    <h5>Precaution</h5>
                                    <hr>
                                    <p>
                                    <p style="color:red"> {{$product->precaution}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->effects)
                                    <h5>Effects</h5>
                                    <hr>
                                    <p>
                                    <p style="color:red"> {{$product->effects}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->withdral)
                                    <h5>Withdrawal</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->withdral}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->safety)
                                    <h5>Safety</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->safety}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->storage)
                                    <h5>Storage</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->storage}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->supply)
                                    <h5>Supply</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->supply}}</p>
                                    </p>
                                    @endif
                                </div>
                                <div class="feat">
                                    @if($product->others)
                                    <h5>Others</h5>
                                    <hr>
                                    <p>
                                    <p> {{$product->others}}</p>
                                    </p>
                                    @endif
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</body>

</html>