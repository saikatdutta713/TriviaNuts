@extends('layouts.admin')
@section('admin__content')
<div class="main__container">
    <!-- MAIN TITLE STARTS HERE -->

    <div class="main__title">
        <div class="display__picture">
            <img src="{{ asset('images/avatar.png') }}" alt="" />
        </div>
        <div class="main__greeting">
            <h1>Hello Codersbite</h1>
            <p>Welcome to your admin dashboard</p>
        </div>
    </div>

    <!-- MAIN TITLE ENDS HERE -->

    <!-- MAIN CARDS STARTS HERE -->
    <div class="main__cards">
        <div class="card">
            <i class="fa fa-user-o fa-2x text-lightblue" aria-hidden="true"></i>
            <div class="card_inner">
                <p class="text-primary-p">Number of Users</p>
                <span class="font-bold text-title">578</span>
            </div>
        </div>

        <div class="card">
            <i class="fa-regular fa-eye fa-2x text-yellow"></i>
            <div class="card_inner">
                <p class="text-primary-p">Traffic</p>
                <span class="font-bold text-title">2467</span>
            </div>
        </div>

        <div class="card">
            <i class="fa-solid fa-diamond-turn-right fa-2x text-danger"></i>
            <div class="card_inner">
                <p class="text-primary-p">Bounce Rate</p>
                <span class="font-bold text-title text-danger">3%</span>
            </div>
        </div>

        <div class="card">
            <i class="fa fa-thumbs-up fa-2x text-green" aria-hidden="true"></i>
            <div class="card_inner">
                <p class="text-primary-p">Number of Participates</p>
                <span class="font-bold text-title">645</span>
            </div>
        </div>
    </div>
    <!-- MAIN CARDS ENDS HERE -->

    <!-- CHARTS STARTS HERE -->
    <div class="charts">
        <div class="charts__left">
            <div class="charts__left__title">
                <div>
                    <h1>Monthly Traffic</h1>
                    <p>India, USA</p>
                </div>
                <i class="fa-solid fa-chart-simple"></i>
            </div>
            <div id="apex1"></div>
        </div>

        <div class="charts__right">
            <div class="charts__right__title">
                <div>
                    <h1>Country Reports</h1>
                    <p>India, USA</p>
                </div>
                <i class="fa-solid fa-globe" aria-hidden="true"></i>
            </div>

            <div class="charts__right__cards">
                <div class="card1">
                    <h1>USA</h1>
                    <p>5,300</p>
                </div>

                <div class="card2">
                    <h1>India</h1>
                    <p>4,200</p>
                </div>

                <div class="card3">
                    <h1>Canada</h1>
                    <p>3900</p>
                </div>

                <div class="card4">
                    <h1>Nep</h1>
                    <p>1881</p>
                </div>
            </div>
        </div>
    </div>
    <!-- CHARTS ENDS HERE -->
</div>
@endsection