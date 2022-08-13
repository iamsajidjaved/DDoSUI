<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="mb-3">
                            <label for="layer" class="form-label">Choose layer:</label>
                            <select class="form-select form-select-lg mb-3" name="layer">
                                <option value="layer_4">Layer 4</option>
                                <option value="layer_7">Layer 7</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="method" class="form-label">Choose method:</label>
                            <select class="form-select form-select-lg mb-3" name="method">
                                <option value="DYN">DYN</option>
                                <option value="APACHE">APACHE</option>
                                <option value="HEAD">HEAD</option>
                                <option value="OVH">OVH</option>
                                <option value="SLOW">SLOW</option>
                                <option value="NULL">NULL</option>
                                <option value="GSB">GSB</option>
                                <option value="STRESS">STRESS</option>
                                <option value="XMLRPC">XMLRPC</option>
                                <option value="POST">POST</option>
                                <option value="CFBUAM">CFBUAM</option>
                                <option value="AVB">AVB</option>
                                <option value="GET">GET</option>
                                <option value="BOT">BOT</option>
                                <option value="COOKIE">COOKIE</option>
                                <option value="EVEN">EVEN</option>
                                <option value="BYPASS">BYPASS</option>
                                <option value="DGB">DGB</option>
                                <option value="CFB">CFB</option>
                                <option value="PPS">PPS</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
