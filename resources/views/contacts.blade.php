@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-center mb-6">Contact Us</h1>
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    required
                    class="block w-full border-black-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
                />
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    required
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                />
                @error('email')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="message" class="block text-sm font-medium text-gray-700">Message:</label>
                <textarea
                    name="message"
                    id="message"
                    required
                    rows="4"
                    class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                ></textarea>
                @error('message')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <button
                type="submit"
                class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-500 transition duration-200"
            >
                Send Message
            </button>
            @if (session('success'))
                <div class="text-green-600 mt-4">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="text-red-600 mt-4">{{ session('error') }}</div>
            @endif
        </form>
    </div>
@endsection
