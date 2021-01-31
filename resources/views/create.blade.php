<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Create Issue</title>
	<link href="css/app.css" rel="stylesheet">
</head>
<body class="font-serif">
	<nav class="py-4 px-8 bg-gray-100 flex items-center justify-between">
		<h2 class="text-xl font-medium text-black">Report Issue</h2>
		<p class="text-gray-500">
			Project:
			<a href="#" class="underline text-indigo-600">eCommerce Prtal</a>
		</p>
	</nav>
	<div class="container text-gray-500 w-4/5 mx-auto mb-24">
		<form class="relative">
			<div class="flex mt-4">
				<label for="category" class="text-right w-1/5 pt-0.5">Category</label>
				<select name="category" class="w-4/5 bg-gray-200 mx-2 h-8 py-0 border-none">
					<option value="0" disabled selected>---Select Category---</option>
					<option value="1">Bug</option>
					<option value="2">Customer Feedback</option>
				</select>
			</div>
			<div class="flex mt-4">
				<label for="severity" class="text-right w-1/5">Severity</label>
				<div class="w-4/5 flex mx-2">
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="severity" value="feature" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Feature</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="severity" value="minor" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Minor</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="severity" value="major" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Major</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="severity" value="crash" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Urgent</span>
					</label>
				</div>
			</div>
			<div class="flex mt-4">
				<label for="priority" class="text-right w-1/5">Priority</label>
				<div class="w-4/5 flex mx-2">
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="priority" value="low" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Low</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="priority" value="normal" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Normal</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="priority" value="important" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Imortant</span>
					</label>
					<label class="inline-flex items-center cursor-pointer">
						<input type="radio" name="priority" value="urgent" class="focus:outline-none form-radio h-5 w-5 text-red-600">
						<span class="mx-2 text-gray-700">Urgent</span>
					</label>
				</div>
			</div>
			<div class="flex mt-4">
				<label for="assign" class="text-right w-1/5 pt-0.5">Assign To</label>
				<select name="assign" class="w-4/5 bg-gray-200 mx-2 h-8 py-0 border-none">
					<option value="0" disabled selected>---Select Member---</option>
					<option value="1">Thet Minn Htun</option>
					<option value="2">Nwe Nwe Win Than</option>
					<option value="3">Yin Yin Aye</option>
					<option value="4">Si Thu Phyo</option>
					<option value="5">Thin Thin Moe</option>
				</select>
			</div>
			<div class="flex mt-4">
				<label for="issue" class="text-right w-1/5 pt-0.5">Issue Summary</label>
				<input type="text" class="w-4/5 mx-2 h-8 py-0" placeholder="Please input summary">
			</div>
			<div class="flex mt-4">
				<label for="detail" class="text-right w-1/5">Detail</label>
				<textarea name="detail" class="w-4/5 mx-2"></textarea>
			</div>
			<div class="flex mt-4">
				<label for="step" class="text-right w-1/5">Steps To Reproduce</label>
				<textarea name="step" class="w-4/5 mx-2"></textarea>
			</div>
			<div class="flex mt-4">
				<label for="screenshot" class="text-right w-1/5">Screenshot or Reference</label>
				<input type="file" name="img" accept="image/*" class="mx-2">
			</div>
		</form>
	</div>
	<footer class="w-full bg-gray-50 -bottom-0 fixed p-5">
		<button type="button" class="hover:bg-gray-200 hover:text-gray-600 focus:outline-none w-md-sm mx-auto block py-2 px-4 border-2 rounded-md text-gray-500">Subbmit Issue</button>
	</footer>
</body>
</html>