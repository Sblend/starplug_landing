<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
	<title>Starplug</title>
</head>
<body class="h-screen bg text-white">
	<div>
		<div class="max-w px-10 md:px-20 py-10">
			<nav>
				<img src="/images/starplug.png" alt="">
			</nav>
			<div class="mt-10 sm:mt-16 lg:mt-32">
				<main class="grid grid-cols-6 gap-6 md:gap-12">
					<div class="col-span-6 lg:col-span-3">
						<img src="/images/celeb.png" class="w-full" alt="">
					</div>
					<div class="col-span-6 lg:col-span-3 mt-5 lg:mt-10">
						<p class="text-base md:text-xl text-celeb">Are you ready for this? Coming Soon!</p>
						<h2 class="text-3xl xl:text-6xl font-bold mt-3">
							Get personalized video messages
							from your favorite stars
						</h2>
						<form class="flex flex-wrap items-center mt-5 sm:mt-10">
							<div class="w-full sm:w-3/5 xl:w-2/3">
								<input placeholder="Enter Your Email Address" required 
								type="text" 
								class="px-4 focus:outline-none h-12 rounded-md celeb-input w-full transition ease-in duration-200"
								name="" id="">
							</div>
							<div class="w-full sm:w-2/5 xl:w-1/3 mt-3 sm:mt-0">
								<button type="submit" class="sm:ml-3 px-2 h-12 rounded-md w-full bg-gradient-to-r from-yellow-600 via-red-500 to-pink-500 hover:opacity-75 transition ease-in duration-200">
									Get Early Access
								</button>
							</div>
						</form>
					</div>
					
				</main>
			</div>
		</div>
	</div>
</body>
</html>