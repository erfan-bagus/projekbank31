@section('title')
Simulasi
@endsection
@extends('headfoo')
@section('content')

      <!-- MAIN START -->
      <!-- FIRST ROW -->

      <!-- FIRST ROW END -->





        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10">
            <div  style="background-color:#fff">
            <ul class="breadcrumba">
              <li><a href="{{URL::route('beranda')}}">Beranda</a></li>
              <li>Simulasi</li>
            </ul>
          </div>
          </div>
          <div class="col-sm-1"></div>
        </div>



        <div class="container-fluid">
          <div class="col-sm-1"></div>
          <div class="col-sm-10" >
            <div  style="background-color:#fff">
            <form action="simulasihitung" method="post">

            <table  style="width:100%">

              <tr>
                <td>
                  <div class="content">
                    Nominal Pinjaman
                  </div>
                </td>
                <td>
                  <div class="content">
                    <input type="text" name="pinjaman" style="width:100%">
                  </div>
                </td>
                <td>
                  <div class="content">
                    Rupiah
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="content">
                    Jangka Waktu
                  </div>
                </td>
                <td>
                  <div class="content">
                    <select name=jangka style="width:100%">
                      <option value="1" selected>-Pilih-</option>
                      <option value="12">12 Bulan</option>
                      <option value="24">24 Bulan</option>
                      <option value="36">36 Bulan</option>
                      <option value="48">48 Bulan</option>
                      <option value="60">60 Bulan</option>
                      <option value="72">72 Bulan</option>
                      <option value="84">84 Bulan</option>
                    </select>
                    <br>
                  </div>
                </td>
                <td>
                  <div class="content">
                    Bulan
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="content">
                    Bunga
                  </div>
                </td>
                <td>
                  <div class="content">
                    <input type="text" name="bunga" style="width:100%">
                  </div>
                </td>
                <td>
                  <div class="content">
                    %
                  </div>
                </td>
              </tr>

              <tr>
                <td>
                  <div class="content">

                  </div>
                </td>
                <td>


                </td>
                <td>
                  <div class="content">

                  </div>
                </td>
              </tr>




            </table>

            <div style="text-align:center;padding-bottom:10px">
                  <input type="submit" class="btn btn-primary" style="color: black;width: 15%;" name="Submit" value="HITUNG">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="PUT">
                </form>
                <br>
          </div>
        </div>
          </div>
          <div class="col-sm-1"></div>
        </div>





          <div class="container-fluid">
            <div class="col-sm-1"></div>
            <div class="col-sm-10" >
              <div style="background-color: #01417d;color:#fff">
              <table>
              <div class="content">

                  <tr>

                  <td>Jangka</td>
                  <td> : {{$jangka}}</td>
                  </tr>
                  <tr>
                  <td>Pinjaman</td>
                  <td> : Rp.{{$pinjaman}},00</td>
                  </tr>
                  <tr>
                  <td>Angsuran</td>
                  <td> : Rp.{{$total}},00</td>
                  </tr>
                </div>

            </table>
          </div>
            </div>
            <div class="col-sm-1"></div>
          </div>


                  <script type="text/javascript">

                  $('#type_dropdown')
                        .on('changed.bs.select',
                            function(e, clickedIndex, newValue, oldValue) {
                                alert(e.target.value);
                            });
                });
                      });

                  </script>
</content>

@endsection
