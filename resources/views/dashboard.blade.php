<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>

                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="text-xl font-semibold mb-4 text-gray-900 dark:text-gray-100">Recent Orders</h3>

                    @if ($recentOrders->isEmpty())
                        <p>No recent orders found.</p>
                    @else
                        <table class="min-w-full table-auto">
                            <thead>
                                <tr class="border-b">
                                    <th class="px-4 py-2 text-left">Order ID</th>
                                    <th class="px-4 py-2 text-left">Name</th>
                                    <th class="px-4 py-2 text-left">Event Type</th>
                                    <th class="px-4 py-2 text-left">Package</th>
                                    <th class="px-4 py-2 text-left">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($recentOrders as $order)
                                    <tr class="border-b">
                                        <td class="px-4 py-2">{{ $order->id }}</td>
                                        <td class="px-4 py-2">{{ $order->name }}</td>
                                        <td class="px-4 py-2">{{ $order->event_type }}</td>
                                        <td class="px-4 py-2">{{ $order->selected_package ?? 'N/A' }}</td>
                                        <td class="px-4 py-2">{{ $order->created_at }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
