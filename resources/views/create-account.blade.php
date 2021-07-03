<!DOCTYPE html>
<html>
<head>
    <title>Create Account</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="{{asset('images/logo.png')}}"/>
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
</head>
<body>
    <div class="wrapper" style="background-image: url('{{asset('images/donation.jpg')}}');">
    <div class="inner">
    <div class="image-holder">
        <img src="{{asset('images/account.svg')}}" alt="image">
    </div>
    <form action="/user/create" method="Post">
        @csrf
        <h3>Account Details</h3>
        <div class="form-group">
            <input type="text" name="firstname" placeholder="First Name" class="form-control">
            <input type="text" name="lastname" placeholder="Last Name" class="form-control">
        </div>
        <div class="form-wrapper">
            <input type="text" name="username" placeholder="Username" class="form-control">
        </div>
        <div class="form-wrapper">
            <input type="number" name="phone" placeholder="Phone Number" class="form-control">
            <div class="alert alert-danger alert-dismissible fade show">@error('phone'){{ $message }}@enderror</div>
        </div>
        <div class="form-wrapper">
            <select name="gender" id="" class="form-control">
                <option value="" disabled selected>Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            <select name="bloodgroup" id="" class="form-control">
                <option value="" disabled selected>Blood Group</option>
                <option value="A+">A+</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="A-">A-</option>
                <option value="B-">B-</option>
                <option value="O-">O-</option>
                <option value="AB-">AB-</option>
            </select>
            <select name="division" id="" class="form-control">
                <option value="" disabled selected>Division</option>
                <option value="dhaka">Dhaka</option>
                <option value="chattogram">Chattogram</option>
                <option value="sylhet">Sylhet</option>
                <option value="barisal">Barisal</option>
                <option value="khulna">Khulna</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rangpur">Rangpur</option>
                <option value="mymensingh">Mymensingh</option>
            </select>
            <select name="district" id="" class= id="error""form-control">
                <option value="" disabled selected>District</option>
                <option value="bagerhat">Bagerhat</option>
                <option value="bandarban">Bandarban</option>
                <option value="barguna">Barguna</option>
                <option value="barisal">Barisal</option>
                <option value="bhola">Bhola</option>
                <option value="bogra">Bogra</option>
                <option value="brahmanbaria">Brahmanbaria</option>
                <option value="chandpur">Chandpur</option>
                <option value="chattogram">Chattogram</option>
                <option value="chuadanga">Chuadanga</option>
                <option value="comilla">Comilla</option>
                <option value="cox's bazar">Cox's Bazar</option>
                <option value="dhaka">Dhaka</option>
                <option value="dinajpur">Dinajpur</option>
                <option value="faridpur">Faridpur</option>
                <option value="feni">Feni</option>
                <option value="gaibandha">Gaibandha</option>
                <option value="gazipur">Gazipur</option>
                <option value="gopalganj">Gopalganj</option>
                <option value="habiganj">Habiganj</option>
                <option value="jaipurhat">Jaipurhat</option>
                <option value="jamalpur">Jamalpur</option>
                <option value="jessore">Jessore</option>
                <option value="jhalakati">Jhalakati</option>
                <option value="jhenaidah">Jhenaidah</option>
                <option value="khagrachari">Khagrachari</option>
                <option value="khulna">Khulna</option>
                <option value="kishoreganj">Kishoreganj</option>
                <option value="kurigram">Kurigram</option>
                <option value="kushtia">Kushtia</option>
                <option value="lakshmipur">Lakshmipur</option>
                <option value="lalmonirhat">Lalmonirhat</option>
                <option value="madaripur">Madaripur</option>
                <option value="magura">Magura</option>
                <option value="manikganj">Manikganj</option>
                <option value="meherpur">Meherpur</option>
                <option value="moulvibazar">Moulvibazar</option>
                <option value="munshiganj">Munshiganj</option>
                <option value="mymensingh">Mymensingh</option>
                <option value="naogaon">Naogaon</option>
                <option value="narail">Narail</option>
                <option value="narayanganj">Narayanganj</option>
                <option value="narsingdi">Narsingdi</option>
                <option value="natore">Natore</option>
                <option value="nawabganj">Nawabganj</option>
                <option value="netrakona">Netrakona</option>
                <option value="nilphamari">Nilphamari</option>
                <option value="noakhali">Noakhali</option>
                <option value="pabna">Pabna</option>
                <option value="panchagarh">Panchagarh</option>
                <option value="parbattya Chattagram">Parbattya Chattagram</option>
                <option value="patuakhali">Patuakhali</option>
                <option value="pirojpur">Pirojpur</option>
                <option value="rajbari">Rajbari</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="rangpur">Rangpur</option>
                <option value="satkhira">Satkhira</option>
                <option value="shariatpur">Shariatpur</option>
                <option value="sherpur">Sherpur</option>
                <option value="sirajganj">Sirajganj</option>
                <option value="sunamganj">Sunamganj</option>
                <option value="sylhet">Sylhet</option>
                <option value="tangail">Tangail</option>
                <option value="thakurgaon">Thakurgaon</option>
            </select>
        </div>
        <div class="form-wrapper">
            <input type="number" name="postcode" placeholder="Post Code" class="form-control">
            <div class="alert alert-danger alert-dismissible fade show">@error('postcode'){{ $message }}@enderror</div>
        </div>
        <button type="submit">Register</button>
    </form>
    </div>
    </div>
</body>
</html>
