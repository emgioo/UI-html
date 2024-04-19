<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="output.css">
</head>
<body>
	
	<div class="w-full h-full">
		<!-- 1st Div -->
		<a name="home"></a>
		<div class="w-[430px] h-[932px] bg-gradient-to-t from-[#017373] to-[#02385A] relative bottom-5">
			<h1 class="text-center text-white font-bold text-[20px] tracking-widest pt-5">Choose Movie</h1>
			<div class="flex items-center justify-center relative my-[16px]">
				<img src="icon/magnifyingglass.png" class="absolute left-8">
				<input type="text" placeholder="Search" class="w-[90%] pl-10 pb-0.5 h-[38px] text-base bg-slate-600 rounded-lg text-white font-thin tracking-widest outline-none">				
				<img src="icon/microphone.png" class="absolute right-8 text-black">
			</div>
			<div class="wrapper relative m-0 max-w-[430px] mt-4 h-auto">
				<div class="slider flex aspect-video overflow-auto">
					<img id="slide-1" class="shrink grow-0 basis-full " src="icon/Rectangle 17.png" >
					<img id="slide-2" class="shrink grow-0 basis-full " src="icon/slide2.jpeg" >
					<img id="slide-3" class="shrink grow-0 basis-full " src="icon/slide3.jpeg" >
				</div>
				<div class="flex justify-center items-center gap-5 absolute z-1 w-[430px] bottom-6">
					<a href="#slide-1" class="w-[10px] h-[10px] rounded-[50%] bg-white bg-opacity-70 hover:bg-opacity-100 "></a>
					<a href="#slide-2" class="w-[10px] h-[10px] rounded-[50%] bg-white bg-opacity-70 hover:bg-opacity-100 "></a>
					<a href="#slide-3" class="w-[10px] h-[10px] rounded-[50%] bg-white bg-opacity-70 hover:bg-opacity-100 "></a> 
				</div>
			</div>
			<h1 class="font-bold text-white ml-[5%] text-base tracking-widest">Now In Cinemas</h1>
			<div class="flex justify-between gap-[30px] mx-[5%] mt-3">
				<img src="icon/image1.png">
				<img src="icon/image2.png">
				<img src="icon/image3.png">
			</div>
			<h1 class="font-bold text-white ml-[5%] text-base tracking-widest my-4">Coming Soon</h1>
			<div class="flex justify-between gap-[30px] mx-[5%] mt-4">
				<img src="icon/image4.png">
				<img src="icon/image5.png">
				<img src="icon/image6.png">
			</div>
			<h1 class="font-bold text-white ml-[5%] text-base tracking-widest my-3">Top Movie</h1>
			<div class="bg-[#02385A] h-[109px]">
				<div class="flex justify-center items-center">
					<div class="w-20 h-20 rounded-full bg-[#025273] flex items-center justify-center -mt-2.5 mr-5">
						<img src="icon/home.png">
					</div>
					<div class="flex gap-[40px] ">
						<img src="icon/icon2.png">
						<a href="#ticket"><img src="icon/icon3.png"></a>
						<img src="icon/icon4.png">
						<img src="icon/icon5.png">
					</div>
				</div>
				<div class="w-[134px] h-[5px] bg-white mx-[35%] rounded-md absolute bottom-3.5"> </div>
			</div>
		</div>

		<!-- 2nd Div -->

		<div class="w-[430px] h-[932px] bg-gradient-to-t from-[#017373] to-[#02385A] relative mb-5" >
			<a name="sdt"></a>
			<img src="icon/bg1.png" class="relative">
			<div class=" w-full flex items-center absolute mx-[5%] top-[47px] gap-10 ">
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Vector.png" >
				</button>
				<h1 class="text-[20px] text-white font-bold tracking-wider">Select Date and Time</h1>
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Calendar.png" >
				</button>
			</div>
			<div class="w-full bg-[#02385A] h-[130px] bg-opacity-40 absolute top-[365px] px-[5%] ">
				<h2 class="text-[20px] text-white tracking-wider mt-3">The Little</h2>
				<div class="flex items-center justify-between">
					<h1 class="text-[20px] text-white font-bold tracking-wider">Mermaid</h1>
					<div>
						<p class="text-[12px] opacity-80 text-white tracking-wider">Runtime: 2h 15min</p>
						<p class="text-[12px] opacity-80 text-white tracking-wider"> Genre: Fantasy, Kids, Musical, Romance</p>
					</div>
				</div>
			</div>
			<div class="bg-[#02385A] h-[476px] -mt-[174px] absolute w-full  px-[5%] pt-3">
				<p class="text-[11px] opacity-80 text-white tracking-wider text-justify">The Little Mermaid, is the beloved story of Ariel, a beautiful and spirited young mermaid with a thirst for adventure. The youngest of King Triton’s daughters and the most defiant, Ariel longs to find out more about the world beyond the sea and, while visiting ... <span class="font-bold">Read More</span></p>
			</div>
			<div class="w-full absolute flex px-[5%] justify-between">
				<div class="w-[60px] h-[90px] text-center py-5 rounded-[10px] bg-gradient-to-br from-[#017373] to-[#025273]">
					<p class="text-base text-white opacity-70 font-semibold">Tue</p>
					<p class="text-base text-white opacity-70 font-semibold">13</p>
				</div>
				<div class="w-[60px] h-[90px] text-center py-5 rounded-[10px] -mt-5 bg-gradient-to-br from-[#017373] to-[#025273]">
					<p class="text-base text-white opacity-70 font-semibold">Wed</p>
					<p class="text-base text-white opacity-70 font-semibold">13</p>
				</div>
				<div class="w-[70px] h-[90px] text-center py-5 rounded-[10px] -mt-10 bg-gradient-to-br from-[#D9705A] to-[#D9BA83]">
					<p class="text-base text-white opacity-70 font-semibold">Thu</p>
					<p class="text-base text-white opacity-70 font-semibold">13</p>
				</div>
				<div class="w-[60px] h-[90px] text-center py-5 rounded-[10px] -mt-5 bg-gradient-to-br from-[#017373] to-[#025273]">
					<p class="text-base text-white opacity-70 font-semibold">Fri</p>
					<p class="text-base text-white opacity-70 font-semibold">13</p>
				</div>
				<div class="w-[60px] h-[90px] text-center py-5 rounded-[10px] bg-gradient-to-br from-[#017373] to-[#025273]">
					<p class="text-base text-white opacity-70 font-semibold">Sat</p>
					<p class="text-base text-white opacity-70 font-semibold">13</p>
				</div>
			</div>
			<div class="w-full absolute px-[5%] bottom-36 flex justify-between">
				<div class="w-[60px] h-[40px] bg-gradient-to-br from-[#017373] to-[#025273] text-center pt-1.5 rounded-[10px]">
					<span class="text-base text-white opacity-70 font-semibold">16:00</span>
				</div>
				<div class="w-[60px] h-[40px] bg-gradient-to-br from-[#017373] to-[#025273] text-center pt-1.5 rounded-[10px] -mt-5">
					<span class="text-base text-white opacity-70 font-semibold">17:00</span>
				</div>
				<div class="w-[60px] h-[40px] bg-gradient-to-br from-[#017373] to-[#025273] text-center pt-1.5 rounded-[10px] -mt-10">
					<span class="text-base text-white opacity-70 font-semibold">18:00</span>
				</div>
				<div class="w-[60px] h-[40px] bg-gradient-to-br from-[#017373] to-[#025273] text-center pt-1.5 rounded-[10px] -mt-5">
					<span class="text-base text-white opacity-70 font-semibold">19:00</span>
				</div>
				<div class="w-[60px] h-[40px] bg-gradient-to-br from-[#017373] to-[#025273] text-center pt-1.5 rounded-[10px]">
					<span class="text-base text-white opacity-70 font-semibold">20:00</span>
				</div>
			</div>
			<div class="w-full absolute px-[5%] bottom-16">
				<button class="w-full h-[60px] bg-gradient-to-l from-[#D9705A] to-[#D9BA83] rounded-[10px]"><a href="" class="text-[20px] font-semibold text-white">Reservation</a></button>
			</div>
			<div class="w-[134px] h-[5px] bg-white mx-[35%] rounded-md absolute bottom-3.5"> </div>
		</div>
		 
		<!-- 3rd Div -->

		<div class="w-[430px] h-[932px] bg-[#02385A] mb-5">
			<div class="w-full px-[5%] flex justify-between items-center pt-[47px]">
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Vector.png" >
				</button>
				<h1 class="text-center text-white font-bold text-[20px] tracking-widest">Select Seats</h1>
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Calendar.png" >
				</button>
			</div>
			<div class="w-full px-[5%] mt-[55px]">
				<div>
					<img src="icon/Screen.png" alt="">
				</div>
				<div class="mt-14">
					<div class="vip-seat">
						<div class="flex items-center justify-center gap-3">
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
						</div>
						<div class="flex items-center justify-center gap-3 mt-7">
							<span><img src="icon/GSeat.png"></span>
							<span><img src="icon/GSeat.png"></span>
							<span><img src="icon/GSeat.png"></span>
							<span><img src="icon/GSeat.png"></span>
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/wSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
						</div>
					</div>
					<div class="2-row flex justify-between mt-10">
						<div class="flex items-center justify-center gap-3">
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
						</div>
						<div class="flex items-center justify-center gap-3">
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/WSeat.png"></span>
						</div>
					</div>
					<div class="3-row flex justify-between mt-7">
						<div class="flex items-center justify-center gap-3">
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
						</div>
						<div class="flex items-center justify-center gap-3">
							<span><img src="icon/WSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
							<span><img src="icon/OSeat.png"></span>
						</div>
					</div>
				</div>
				<div class="4-row flex justify-between mt-7">
					<div class="flex items-center justify-center gap-3">
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/WSeat.png"></span>
					</div>
					<div class="flex items-center justify-center gap-3">
						<span><img src="icon/WSeat.png"></span>
						<span><img src="icon/WSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
					</div>
				</div>
				<div class="-row flex justify-between mt-7">
					<div class="flex items-center justify-center gap-3">
						<span><img src="icon/WSeat.png"></span>
						<span><img src="icon/WSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
					</div>
					<div class="flex items-center justify-center gap-3">
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/OSeat.png"></span>
						<span><img src="icon/WSeat.png"></span>
						<span><img src="icon/WSeat.png"></span>
					</div>
				</div>

			</div>
			<div class="mx-[5%] flex justify-between my-14">
				<div class="flex items-center gap-3">
					<span class="w-4 h-4 rounded-[50%] bg-white"></span>
					<p class="text-white text-base">Avialable</p>
				</div>
				<div class="flex items-center gap-3">
					<span class="w-4 h-4 rounded-[50%] bg-[#D9705A]"></span>
					<p class="text-white text-base">Reserved</p>
				</div>
				<div class="flex items-center gap-3">
					<span class="w-4 h-4 rounded-[50%] bg-[#0AA6A5]"></span>
					<p class="text-white text-base">Selected</p>
				</div>
			</div>
			<div class="h-[234px] bg-gradient-to-r from-[#75EBE5] to-[#D9705A] border-t-2">
				<div class="flex justify-center mt-2">
					<img src="icon/Arrow - Down 2.png">
				</div>
				<div class="flex items-center justify-between">
					<div>
						<div class="ml-5 flex items-center gap-3 mt-4">
							<img src="icon/Calendar.png">
							<span class="text-base text-white">Thu, June 15, 2023</span>
							<span class="w-[10px] h-[10px] rounded-[50%] bg-white"></span>
							<span class="text-base text-white">6:00 pm</span>
						</div>
						<div class="ml-5 flex items-center gap-3 my-6">
							<img src="icon/Ticket.png">
							<span class="text-base text-white">VIP, Section</span>
							<span class="w-[10px] h-[10px] rounded-[50%] bg-white"></span>
							<span class="text-base text-white">Seats 8,9,10,11</span>
						</div>
						<div class="ml-5 flex items-center gap-3">
							<img src="icon/Buy.png">
							<span class="text-base text-white">Total 4: QAR 160</span>
						</div>
						
					</div>
					<div class=" bg-[#02385A] bg-opacity-40 border-2 p-5 rounded-l-full">
						<button class="w-[90px] h-[90px] bg-opacity-40 rounded-[50%] bg-gradient-to-r from-[#75EBE5] to-[#D9705A]"><a href="" class="text-white font-bold text-[20px]">Confirm</a></button>
					</div>
				</div>
				<div class="w-[134px] h-[5px] bg-white mx-[35%] rounded-md mt-[37px]"> </div>
			</div>
		</div>

		<!-- 4th div-->
		<div class="w-[430px] h-[932px] bg-gradient-to-bl from-[#017373] to-[#025273] relative mb-20">
	
			<div class="w-full px-[5%] flex justify-between items-center pt-[47px]">
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Vector.png" >
				</button>
				<h1 class="text-center text-white font-bold text-[20px] tracking-widest">Mobile Tickets</h1>
				<button class="w-[44px] h-[44px] rounded-[50%] bg-[#75EBE5] justify-center flex items-center bg-opacity-60">
					<img src="icon/Calendar.png" >
				</button>
			</div>
			<div class="text-center mt-6">
				<div>
					<p class="text-base text-white opacity-80 font-normal">Thank you for Choosing Us!</p>
					<p class="text-[20px] text-white font-bold ">Enjoy Your Movie Time</p>
				</div>
				<div class="flex justify-cente my-14 ">
					<img src="icon/Mobile Tickets.png" class="">
				</div>
				<p class="text-base text-white opacity-80 font-normal">Simply Scan The Barcode to Access the Movie</p>
			</div>
			<div class="bg-[#02385A] h-[109px] absolute bottom-0 w-full">
				<div class="flex justify-center items-center gap-[40px]">
					<a href="#home"><img src="icon/home.png"></a>
					<img src="icon/icon2.png" class="-mr-4">
					<div class="w-20 h-20 rounded-full bg-[#025273] flex items-center justify-center -mt-2.5">
						<a name="ticket"><img src="icon/icon3.png"></a>
					</div>
					<img src="icon/icon4.png" class="-ml-4">
					<img src="icon/icon5.png">			
				</div>
				<div class="w-[134px] h-[5px] bg-white mx-[35%] rounded-md absolute bottom-3.5"> </div>
			</div>
		</div>

	</div>
	
</body>
</html>