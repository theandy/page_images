# Page Images (TYPO3 Sitepackage)

## Beschreibung

Ermöglicht die Pflege und Ausgabe von **mehreren Bildern pro Seite**
(Feld `tx_page_image` in `pages`).

------------------------------------------------------------------------

## Installation

-   Extension installieren
-   TCA-Feld wird der Seite hinzugefügt

------------------------------------------------------------------------

## Verwendung im Template

``` html
<f:cObject typoscriptObjectPath="lib.pageImages" data="{data}" />
```

------------------------------------------------------------------------

## TypoScript (Setup)

``` typoscript
lib.pageImages = FLUIDTEMPLATE
lib.pageImages {
    templateName = PageImages

    templateRootPaths {
        10 = EXT:page_images/Resources/Private/Templates/
        20 = {$plugin.tx_page_image.view.templateRootPath}
    }
    partialRootPaths {
        10 = EXT:page_images/Resources/Private/Partials/
        20 = {$plugin.tx_page_image.view.partialRootPath}
    }
    layoutRootPaths {
        10 = EXT:page_images/Resources/Private/Layouts/
        20 = {$plugin.tx_page_image.view.layoutRootPath}
    }

    dataProcessing {
        10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        10 {
            references {
                table = pages
                fieldName = tx_page_image
            }
            as = pageImages
        }
    }
}
```

------------------------------------------------------------------------

## Fluid (Default Template)

``` html
<f:if condition="{pageImages}">
    <f:for each="{pageImages}" as="image">
        <f:image image="{image}" />
    </f:for>
</f:if>
```

------------------------------------------------------------------------

## Konstanten (Override)

``` typoscript
plugin.tx_page_image.view {
    templateRootPath =
    partialRootPath =
    layoutRootPath =
}
```

------------------------------------------------------------------------

## Hinweise

-   basiert auf TYPO3 FAL (`sys_file_reference`)
-   Mehrfachbilder über TCA (`maxitems`)
-   Ausgabe erfolgt über `FilesProcessor`
