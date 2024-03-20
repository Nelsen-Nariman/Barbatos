@extends('template.layout')

@section('title')
    historyPage
@endsection

@section('styling')
    
@endsection

{{-- Body --}}
@section('content')
    @foreach ($transactions as $transaction)
        <div class="centering" style="display: flex; justify-content: center; margin-top: 3rem;">
            @php
                $totalPrice = 0;
                $totalQuantity = 0;
            @endphp

            <div class="accordion" id="accordionExample" style="width: 40rem;">
                <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $transaction->id }}" aria-expanded="true" aria-controls="collapse-{{ $transaction->id }}">
                        Transaction Date {{ $transaction->transaction_date }}
                    </button>
                </h2>
                <div id="collapse-{{ $transaction->id }}" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Sub Price</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach ($transaction->products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->pivot->quantity }}</td>
                                    <td>IDR {{ $product->price }}</td>
                                </tr>

                                @php
                                    $totalPrice+=$product->price;
                                    $totalQuantity+=$product->pivot->quantity;
                                @endphp
                            @endforeach

                            <tr>
                                <td class="fw-bold">Total</td>
                                <td class="fw-bold">{{ $totalQuantity }} item(s)</td>
                                <td class="fw-bold">IDR {{ $totalPrice }}</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    @endforeach

@endsection