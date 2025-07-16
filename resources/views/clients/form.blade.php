
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
    <input type="text" name="name" value="{{ old('name', $client->name ?? '') }}" placeholder="Clinic Name" class="border p-2 rounded w-full">
    <input type="text" name="db_host" value="{{ old('db_host', $client->db_host ?? '') }}" placeholder="DB Host" class="border p-2 rounded w-full">
    <input type="text" name="db_port" value="{{ old('db_port', $client->db_port ?? '3306') }}" placeholder="DB Port" class="border p-2 rounded w-full">
    <input type="text" name="db_name" value="{{ old('db_name', $client->db_name ?? '') }}" placeholder="DB Name" class="border p-2 rounded w-full">
    <input type="text" name="db_username" value="{{ old('db_username', $client->db_username ?? '') }}" placeholder="DB Username" class="border p-2 rounded w-full">
    <input type="text" name="db_password" value="{{ old('db_password', $client->db_password ?? '') }}" placeholder="DB Password" class="border p-2 rounded w-full">
    <input type="date" name="subscription_start_date" value="{{ old('subscription_start_date', $client->subscription_start_date ?? '') }}" class="border p-2 rounded w-full">
    <input type="date" name="subscription_end_date" value="{{ old('subscription_end_date', $client->subscription_end_date ?? '') }}" class="border p-2 rounded w-full">
    <input type="date" name="renewal_date" value="{{ old('renewal_date', $client->renewal_date ?? '') }}" class="border p-2 rounded w-full">
    <input type="number" step="0.01" name="price_per_month" value="{{ old('price_per_month', $client->price_per_month ?? '') }}" placeholder="Monthly Price" class="border p-2 rounded w-full">
</div>
