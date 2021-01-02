#!/usr/bin/env python
# -*- coding: utf-8 -*-
from selenium import webdriver
from selenium.webdriver.common.action_chains import ActionChains
from selenium.webdriver.common.keys import Keys
import time
from selenium.webdriver.common.by import By
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC




driver = webdriver.Chrome()
driver.get("https://www.google.com/maps/@34.3097665,4.2376437,7z")
element = driver.find_element_by_id("searchboxinput")

 #listwilaya= ["أدرار", " الشلف", "الأغواط", "أم البواقي", "باتنة", " بجاية", "بسكرة", "بشار", "البليدة", "البويرة", "تمنراست", "تبسة", "تلمسان", "تيارت", "تيزي وزو", "الجزائر", "الجلفة", "جيجل", "سطيف", "سعيدة", "سكيكدة", "سيدي بلعباس", "عنابة", "قالمة", "قسنطينة", "المدية", "مستغانم", "المسيلة", "معسكر", "ورقلة", "وهران", "البيض", "إليزي", "برج بوعريريج", "بومرداس", "الطارف", "تندوف", "تيسمسيلت", "الوادي", "خنشلة", "سوق أهراس", "تيبازة", "ميلة", "عين الدفلة", "النعامة", "عين تيموشنت", "غرداية", "غليزان"]
 listwilaya=[  "Jijel", "Sétif", "Saïda", "Skikda", "Sidi Bel Abbès", "Annaba", "Guelma", "Constantine", "Médéa", "Mostaganem", "M'Sila", "Mascara", "Ouargla", "Oran", "El Bayadh", "Illizi", "Bordj Bou Arreridj", "Boumerdès", "El Tarf", "Tindouf", "Tissemsilt", "El Oued", "Khenchela", "Souk Ahras", "Tipaza", "Mila", "Aïn Defla", "Naâma", "Aïn Témouchent", "Ghardaïa", "Relizane"]

#listwilaya=[ "Adrar","Chlef","Laghouat", "Oum El Bouaghi", "Batna", "Béjaïa", "Biskra", "Béchar", "Blida", "Bouira", "Tamanrasset", "Tébessa", "Tlemcen", "Tiaret", "Tizi Ouzou", "Alger", "Djelfa", "Jijel", "Sétif", "Saïda", "Skikda", "Sidi Bel Abbès", "Annaba", "Guelma", "Constantine", "Médéa", "Mostaganem", "M'Sila", "Mascara", "Ouargla", "Oran", "El Bayadh", "Illizi", "Bordj Bou Arreridj", "Boumerdès", "El Tarf", "Tindouf", "Tissemsilt", "El Oued", "Khenchela", "Souk Ahras", "Tipaza", "Mila", "Aïn Defla", "Naâma", "Aïn Témouchent", "Ghardaïa", "Relizane"]

jobs=['Medecin', 'Avocat', 'noteur', 'Architecture', 'Impression', 'Charpenterie', 'builder', 'Composition hygienique', 'Plomberie', 'peintre', 'platre', 'Soudeur', 'Menuiserie aluminium', 'electricien', 'Mecanique automobile', 'electricite des voitures', 'Lave-Auto', 'installation de verre automobile', "l'interieur du vehicule", 'Mecanique moto', 'Reparation et vente de roues', 'Carreaux de porcelaine et mosaique', 'reparation de lunettes', 'Reparation de montres', 'Blanchisserie et nettoyage sec', 'Beaute et maquillage', 'design', 'Notification automatisee', 'Reparer les telephones et les ordinateurs', 'Techniques audiovisuelles', 'coiffeuse', 'coiffeur', 'cordonnerie', 'climatisation', "Reparation d'appareils electromenagers", 'panneaux solaires', "systemes d'alarme", 'marketing', 'couturiere', 'patisserie', 'Boulanger et tartes', 'Boucherie', 'legumes', 'Produits alimentaires generaux', 'boissons et collations', 'chocolat et biscuits', 'Restaurant et cafe', 'cosmetique', 'vetements', 'Quincaillerie', 'librarie', 'Taxi', 'Transport inter-etats', 'sport', 'couvertures et meubles', 'Hotel', 'Horticulture', 'creche', 'bijoutier', 'veterinaire', 'Vendre des animaux', 'Gardiennage et paturage', 'Emballage', 'Fabrication de beton']

jobsar= ['طبيب خاص', 'محامي', 'موثق', 'مهدنس معماري', 'طباعة', 'نجارة', 'البنــاء', 'التركيب الصحي و الغـاز', 'سباكة', 'دهان', 'تجصيص بلاتر', 'التلحيم', 'نجارة الألومينيوم وللمواد البلاستيكية', 'الكهرباء المعمارية', 'ميكانيك السيارات و الشاحنات', 'كهرباء السيارات', 'غسل السيارات', 'طلاء و تركيب زجاج السيارات', 'التجهيز و التأثيث الداخلي للمركبات', 'ميكانيك تصليح الدراجات العادية والنارية', 'تصليح وبيع العجلات', 'البلاط الخزف و الفسيفساء', 'تركيب و تصليح الـنظارات', 'تصليح الساعات', 'مغسلة و التنظيف الجاف', 'تجميل ومكياج', 'تصميم ورسم', 'إعلام آلي', 'تصليح الهواتف و الحواسيب', 'تقنيات السمعي البصري', 'حِلاقة النساء', 'حِلاقة الرجال', 'تصليح الأحذية', 'تركيب و صيانة أجهزة التبريد و التكييف', 'تصليح الأجهزة الكهرومنزلية', 'تركيب الألواح الشمسية، الضوئية و الحرارية', 'تركيب وصيانة أنظمة الإنذار والمراقبة بالفيديو', 'التسويق', 'الخـيـاطــة', 'صناعة الحلويات', 'الخبازة و والفطائر', 'الجزارة و منتجات اللحوم', 'محل خضروات', 'مواد غذائية عامة', 'تحضير المشروبات و المصبرات', 'تحضير الحلويات ، الشكولاطة و البسكويت', 'مطعم ومقهى', 'هدايا وعطور وفليكسي', 'محل ألبسة', 'محل خردوات وأدوات', 'مكتبة و أدوات', 'تاكسي', 'نقل بين الولايات', 'رياضة', 'بيع الأغطية و المفروشات', 'الفندقة و السياحة', 'البـسـتـنـة', 'حضانة', 'صائغ', 'بيطري', 'بيع الحيوانات', 'حراسة و رعي', 'تعبئة وتغليف', 'صناعة الخرسانة ومواد البناء']




allnames=[]
jobnumber=0
for job in jobs :
    for wilaya in listwilaya:
      x=0
      action = ActionChains(driver)
      while x<50 :
          action3 = ActionChains(driver)
          action3.send_keys(Keys.BACK_SPACE)
          action3.perform()
          x=x+1
      location= (wilaya)

      action.click(on_element=element)
      action.send_keys(job+" en wilaya de "+location)
      action.send_keys(Keys.RETURN)
      action.perform()

      f = open("file.txt", "a",encoding='utf-8') #creat file if not exist

      element1 = WebDriverWait(driver, 20).until(
         EC.presence_of_element_located((By.CLASS_NAME, "section-result-title")))
      condition = True
      while condition==True:
       time.sleep(1)
       names = driver.find_elements_by_class_name('section-result-title')
       phones = driver.find_elements_by_class_name('section-result-phone-number')


       x=0
       l= len(names)


     # rating location with loop job with loop description (times rue)



       while (x<l):


        try:
            name=names[x].text
            phone = phones[x].text
        except:
            name ="error"
            phone="error"
            pass

        if name in allnames:
            continue
        else:
                print (name)
                f.write(name+"\n")
                if phone=="":
                    nophone="no phone number"
                    print(nophone)
                    f.write(nophone+"\n")
                else:
                    print (phone)
                    f.write(phone+"\n")
                print(wilaya)
                f.write(wilaya+"\n")
                print(jobsar[jobnumber])
                f.write(jobsar[jobnumber]+"\n")
                x=x+1
                allnames.append(name)

       try:
              wait = WebDriverWait(driver, 2)
              element2 = wait.until(EC.element_to_be_clickable((By.ID, 'n7lv7yjyC35__section-pagination-button-next')))
              nextbtn=driver.find_element_by_id("n7lv7yjyC35__section-pagination-button-next")
              action2 = ActionChains(driver)
              action2.click(on_element=nextbtn)
              action2.perform()
              time.sleep(7)

       except:
              print("done")
              break
    jobnumber=jobnumber+1
