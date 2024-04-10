$((function() {
    $(".block-faqs-listado-faq-titular").on("click", (function(t) {
        return t.preventDefault(),
        $(this).parents(".block-faqs-listado-faq").toggleClass("active").find(".block-faqs-listado-faq-texto").slideToggle(200),
        !1
    }
    ))
}
));
