import axios from '@/plugins/axios'

export default {
    /** Categories */
    // async getCategories (shop_id) {
    //     return await axios.get('/api/categories/' + shop_id)
    // },
    /** Settings */
    // async getSettings (params) {
    //     return await axios.post('/api/get-settings', params)
    // },
    /** Products */
    // async getProducts (shop_id, params) {
    //     return await axios.post('/api/products/' + shop_id, params)
    // },
    /** Product */
    // async getProductById (params) {
    //     return await axios.post('/api/get-product-by-id', params)
    // },
    /** Category banner */
    // async getCategoryBanner (params) {
    //     return await axios.post('/api/category/banner', params)
    // },
    /** Get work time */
    // async getWorkTime (params) {
    //     return await axios.post('/api/get-work-time', params)
    // },
    /** Addresses pickup */
    // async getAddresses (shop_id) {
    //     return await axios.post('/api/addresses/list', { shop_id })
    // },
    /** Buyer addresses  */
    // async getBuyerAddresses (params) {
    //     return await axios.post('/api/buyer-addresses/list', params)
    // },
    /** Create buyer address */
    // async createBuyerAddress (params) {
    //     return await axios.post('/api/create-buyer-address', params)
    // },
    /** Create buyer address */
    // async removeBuyerAddress (params) {
    //     return await axios.post('/api/remove-buyer-address', params)
    // },
    /** Create buyer complaint */
    async createBuyerComplaint (params) {
        return await axios.post('/api/create-buyer-complaint', params)
    },
    /** User data  */
    // async getUserData (params) {
    //     return await axios.post('/api/buyer/info', params)
    // },
    /** User data update */
    // async updateUserData (params) {
    //     return await axios.post('/api/buyer/update', params)
    // },
    /** Check promocode */
    // async checkPromocode (params) {
    //     return await axios.post('/api/promocode/check', params)
    // },
    /** Get delivery info */
    // async getDeliveryInfo (params) {
    //     return await axios.post('/api/delivery/info', params)
    // },
    /** Set orders */
    // async orders (params) {
    //     return await axios.post('/api/orders', params)
    // },
    /** Set invoice orders */
    // async invoice (params) {
    //     return await axios.post('/api/invoice', params)
    // },
    /** Get bot message order */
    // async getBotMessageOrder (params) {
    //     return await axios.post('/api/get-bot-message-order', params)
    // },
    /** Get profile orders info */
    // async getOrdersInfo (params) {
    //     return await axios.post('/api/profile/get-orders-info', params)
    // },
    /** Get profile orders */
    // async getProfileOrders (params) {
    //     return await axios.post('/api/profile/orders', params)
    // },
    /** Order */
    // async getProfileOrder (params) {
    //     return await axios.post('/api/profile/order', params)
    // },
    /** Favorites */
    // async getProductsFavorites (params) {
    //     return await axios.post('/api/get-products-by-id', params)
    // },
    /** Main template */
    // async getTemplate(params) {
    //     return await axios.post('/api/template', params)
    // },
    /** Component */
    // async getComponentById(params) {
    //     return await axios.post('/api/component', params)
    // },
    /** Component */
    async getSearchProducts(params) {
        return await axios.post('/api/products-search', params)
    },
    /** Component */
    async getSearchCategories (params) {
        return await axios.post('/api/categories-search', params)
    }
    /** Category-products */
    // async getProductsForCategory(params) {
    //     return await axios.post('/api/category/products', params)
    // },
    /** Children categories */
    // async getCategoriesForParentCategory(params) {
    //     return await axios.post('/api/category/children', params)
    // },
    /** Terms */
    // async getTerms(params) {
    //     return await axios.post('/api/get-terms', params)
    // }
}
