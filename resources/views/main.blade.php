@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
         <div class="col-md-4">
            
              <div class="col-md-20">
                <h1>一日分のカロリー計算</h1>
                <h1>ようこそ{{ "$name" }}さん！</h1>
              </div>
            
          </div>
      </div>

      <br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="col-md-8">
                <p>{{ $name }}さんは現在{{ $age2 }}歳です。</p>

                <p>{{ $name }}さんの基礎代謝は{{ $bmr2 }}kcalです。</p>
                  <form>
                    <div class="example">
                      <label for="heightlabel">今日の摂取カロリー</label>
                      <input class="inputs" type="number" name="minus" placeholder="例) 2500kcal" value="{{ old('minus') }}" equired autocomplete="minus" autofocus>
                      @error("minus")
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                      @enderror
                    </div>
                                      
                    <div class="example">
                      <label for="weightlabel">今日の消費カロリー</label>
                      <input class="inputs" type="number" name="plus"  value="{{ old('plus') }}" equired autocomplete="plus" autofocus placeholder="例) 800kcal">
                    </div>

                    <div class="example">
                      <button type='submit'>結果を計算</button>
                    </div>
                  </form>
              </div>
            </div>
        </div> 
    </div>
</div>

<br>
    <div class="row justify-content-center">
            <div class="col-md-4">
                
                  <div class="col-md-20">
                    <h1>今日の総消費カロリーは{{ $total }}kcalです。</h1>
                    <h1>1kg体重を落とすのに{{ $diet }}日間必要です!</h1>
                  </div>
            </div>
    </div>
@endsection