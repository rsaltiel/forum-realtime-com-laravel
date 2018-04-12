<template>
    <div>
        <div class="card">
            <div class="card-content">
                <span class="card-tile">Rafael {{ replied }}</span>
                <blockquote>
                    Natus eum itaque rerum soluta. Debitis sit consequuntur doloremque recusandae. Maiores modi excepturi quos omnis. Velit ut reiciendis debitis perferendis consequatur omnis. Id magnam dolorem totam incidunt consequatur. Ut sed voluptatum beatae error. Dolorum ut corporis velit quo. Velit dicta iste quam et. Architecto aut aperiam molestiae voluptas tenetur. Facilis laboriosam libero sed magnam omnis voluptatem. Sit quaerat vero suscipit fugiat.
                </blockquote>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-tile">Rafael {{ replied }}</span>
                <blockquote>
                    Natus eum itaque rerum soluta. Debitis sit consequuntur doloremque recusandae. Maiores modi excepturi quos omnis. Velit ut reiciendis debitis perferendis consequatur omnis. Id magnam dolorem totam incidunt consequatur. Ut sed voluptatum beatae error. Dolorum ut corporis velit quo. Velit dicta iste quam et. Architecto aut aperiam molestiae voluptas tenetur. Facilis laboriosam libero sed magnam omnis voluptatem. Sit quaerat vero suscipit fugiat.
                </blockquote>
            </div>
        </div>
        <div class="card">
            <div class="card-content">
                <span class="card-tile">Rafael {{ replied }}</span>
                <blockquote>
                    Natus eum itaque rerum soluta. Debitis sit consequuntur doloremque recusandae. Maiores modi excepturi quos omnis. Velit ut reiciendis debitis perferendis consequatur omnis. Id magnam dolorem totam incidunt consequatur. Ut sed voluptatum beatae error. Dolorum ut corporis velit quo. Velit dicta iste quam et. Architecto aut aperiam molestiae voluptas tenetur. Facilis laboriosam libero sed magnam omnis voluptatem. Sit quaerat vero suscipit fugiat.
                </blockquote>
            </div>
        </div>
        <div class="card grey lighten-4">
            <div class="card-content">
                <span class="card-title">{{ reply }}</span>
                <form>
                    <div class="input-field">
                        <textarea rows="10" class="materialize-textarea" :placeholder="yourAnswer"></textarea>
                    </div>
                    <button type="submit" class="btn red accent-2">{{ send }}</button>
                </form>
            </div>
          
        </div>
    </div>
</template>

<script>
    export default {
        props:[
            'replied',
            'reply',
            'yourAnswer',
            'send'
        ]
    }
</script>
