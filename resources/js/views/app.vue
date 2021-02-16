<template>
    <div class="text-white mb-8">
        <div class="places-input text-gray-800">
            <input type="text" class="w-full">
        </div>
        <div class="weather-container font-sans max-w-lg overflow-hidden bg-gray-900 shadow-lg mt-4 rounded-lg">
            <div class="current-weather flex items-center justify-between px-6 py-8">
                <div class="flex items-center">
                    <div>
                        <div class="text-6xl font-semibold">
                            {{ currentTemperature.actual }}°C
                        </div>
                        <div>
                            Feels like {{ currentTemperature.feelsLike }}°C
                        </div>
                    </div>
                    <div class="mx-5">
                        <div class="font-semibold">
                            {{ currentTemperature.summary }}
                        </div>
                        <div>
                            {{ location.name }}, {{ location.country }}
                        </div>
                    </div>
                </div>
                <div>Icon</div>
            </div>

            <div class="future-weather text-sm bg-gray-800 px-6 py-8 overflow-hidden">
                <div class="flex items-center">
                    <div class="w-1/6 text-lg text-gray-200">
                        Mon
                    </div>
                    <div class="w-4/6 px-4 flex items-center">
                        <div>icon</div>
                        <div class="ml-3">Cloudy with a chance of rain</div>
                    </div>
                    <div class="w-1/6 text-right">
                        <div>5°C</div>
                        <div>-2°C</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  mounted() {
      this.fetchedData()
  },
  data() {
      return {
          location: {
              name: 'Karachi',
              country: 'Pakistan',
          },
          currentTemperature: {
              actual: '',
              feelsLike: '',
              summary: ''
          }
      }
  },
  methods: {
      fetchedData() {
          fetch(`http://127.0.0.1:8000/api/weather?cityName=${this.location.name}`)
            .then(response => response.json())
            .then(data => {
                console.log(data)
                this.currentTemperature.actual = data.main.temp
                this.currentTemperature.feelsLike = data.main.feels_like
                this.currentTemperature.summary = data.weather[0].main
            })
      }
  },
}
</script>