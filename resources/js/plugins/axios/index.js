import axios from 'axios'
import interceptors from '@/plugins/axios/interceptors.js'

/**
 * Settings opt Axios
 */
const instance = axios.create({
    baseURL: import.meta.env.VITE_API_URL,
    //withCredentials: true,
    headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json'
    }
})
interceptors(instance)
export default instance
