//import Trans from '../../i18n/translation'

export default function (axios) {
    axios.interceptors.request.use(
        function (config) {
            //const locale = Trans.guessDefaultLocale()
            //config.params = { lang: locale, ...config.params }
            // config.headers['X-CSRF-TOKEN'] = document
            //     .querySelector('meta[name="csrf-token"]')
            //     .getAttribute('content')
            return config
        },
        function (error) {
            // Do something with request error
            console.log(error)
            return Promise.reject(error)
        }
    )
    axios.interceptors.response.use(
        response => response.data,
        async error => {
            if (error.response.status === 401) {
                // Do something
                throw Error('Error: ' + error.response.status)
            }
            if (error.response.status === 404) {
                // Do something
                console.log('Error: ' + error.response.status)
            }
            if (error.response.status === 500) {
                // Do something
                throw Error('Error: ' + error.response.status)
            }
            return Promise.reject(error.response.data)
        }
    )
}
